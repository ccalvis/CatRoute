<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CatRoute extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->library('ion_auth');
        $this->load->model('catroute_model');
        $this->load->library('grocery_CRUD');
    }
    
    public function index() {
        if(!$this->ion_auth->logged_in() ){
            $this->load->view('templates/header');
            $this->load->view('templates/navbar-inici');
            $this->load->view('web-no-logat');
            $this->load->view('templates/footer');
        }
        else{
            $this->rutes_inici();
        }
    }
    
    public function dades_login() {
        if($this->input->post()) {
            $nom = $this->input->post('nom');
            $contrasenya = $this->input->post('contra');
            $recordar = $this->input->post('recordar');
            
            if($this->ion_auth->login($nom, $contrasenya, $recordar)){
                $this->rutes_inici();
            }else{
                redirect('CatRoute/index');
            }
        }else{
            redirect('CatRoute/index');
        }
    }
    
    public function dades_registre(){
        if($this->input->post()){
            $username = $this->input->post('nick');
            $password = $this->input->post('contra');
            $email = $this->input->post('email');
            $additional_data = array(
                'first_name' => $this->input->post('nom'),
                'last_name' => $this->input->post('cognom'),
            );
            $group = array('2'); //fiquem els usuaris a membres
            
            $id_user = $this->ion_auth->register($username, $password, $email, $additional_data, $group);
            
            //avatar per defecte
            $foto = file_get_contents("img/avatar.jpg");
            $nom = "avatar.jpg";
            $tipo = "image/jpeg";
            $this->catroute_model->pujar_foto($id_user, $nom, $tipo, $foto);
            
            redirect('CatRoute/index');
        }
    }
    
    public function logout() {
        $this->data['title'] = "Logout";
        $this->ion_auth->logout();
        $this->session->set_flashdata('message', $this->ion_auth->messages());
        redirect('CatRoute', 'refresh');
    }   
    
    public function rutes_inici() {
        if($this->ion_auth->logged_in() ){
            //consulta a la BD les rutes
            $data['rutes'] = $this->catroute_model->consulta_rutes();
            
            if(!$this->ion_auth->is_admin()){
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-logat-user');
                $this->load->view('web-logat', $data);
                $this->load->view('templates/footer');
            }
            else{
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-logat-admin');
                $this->load->view('web-logat', $data);
                $this->load->view('templates/footer');
            }
        }else{
            redirect('CatRoute/index');
        }
    }
    
    public function crear_ruta() {
        if($this->ion_auth->logged_in() ){
            if(!$this->ion_auth->is_admin()){
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-logat-user');
                $this->load->view('web-logat-crear');
                $this->load->view('templates/footer');
            }
            else{
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-logat-admin');
                $this->load->view('web-logat-crear');
                $this->load->view('templates/footer');
            }
            //revem el formulari
            if($this->input->post()){
                $tipusMoto = $this->input->post('tipus-moto');
                $tipusRuta = $this->input->post('tipus-ruta');
                $estacio = $this->input->post('estacio');
                $mirador = $this->input->post('mirador');
                $estatCarretera = $this->input->post('estat');
                $ruta = $this->input->post('ruta');
                $url = $this->input->post('url');
                $comentari = $this->input->post('comentari');
                
                $this->catroute_model->insertar_ruta($tipusMoto, $tipusRuta, $estacio, $mirador, $estatCarretera, $ruta, $url, $comentari);
            }
        }else{
            redirect('CatRoute/index');
        }
    }
    
    public function administracio_rutes() {
        if($this->ion_auth->logged_in() ){
            if($this->ion_auth->is_admin()){
                $crud = new grocery_CRUD();
 
                $crud->set_table('rutes')
                        ->set_subject('Rutes')
                        ->columns('id_user','tipus_moto','ruta','comentari')
                        ->display_as('id_user','ID User')
                        ->display_as('tipus_moto','Tipus Moto')
                        ->display_as('ruta','Ruta')
                        ->display_as('comentari','Comentari');
                        
                $crud->fields('id_user','tipus_moto','ruta','comentari');

                $output = $crud->render();

                $this->mostrar_crud($output);
                
            }
            else{
                redirect('CatRoute/index');
            }
        }else{
            redirect('CatRoute/index');
        }     
    }
        
    public function compte_user() {
        if($this->ion_auth->logged_in() ){
            //consulta a la BD
            $data['infoUser'] =$this->catroute_model->consultar_user();
            $data['imgUser'] = $this->catroute_model->consultar_img_user();
            
            if(!$this->ion_auth->is_admin()){
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-logat-user');
                $this->load->view('web-logat-compte', $data);
                $this->load->view('templates/footer');
            }
            else{
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-logat-admin');
                $this->load->view('web-logat-compte', $data);
                $this->load->view('templates/footer');
            }
        }else{
            redirect('CatRoute/index');
        }
    }
    
    public function editar_user() {
        if($this->ion_auth->logged_in()) {
            if($this->input->post()) {
                //revem les modificacions del usuari
                $nick = $this->input->post('nick');
                $contra = $this->input->post('contra');
                $this->catroute_model->editar_user($nick, $contra);
                redirect('CatRoute/compte_user');
            }
        }else{
            redirect('CatRoute/index');
        }
    }
    
    public function editar_avatar() {
        if($this->ion_auth->logged_in()) {
            $maximo = 102400; //100Kb

            if ( is_uploaded_file($_FILES['imagen']['tmp_name']) ) 
            { 	// Se ha subido?

                // Es correcto?
                $fp = fopen($_FILES['imagen']['tmp_name'], 'r'); //Abrimos la imagen
                $imagen = fread($fp, filesize($_FILES['imagen']['tmp_name'])); //Extraemos el contenido de la imagen

                fclose($fp); //Cerramos imagen

                if(!get_magic_quotes_gpc())
                        $nombre = addslashes($_FILES['imagen']['name']); // Arreglamos el Nombre
                else 
                        $nombre = $_FILES['imagen']['name'];
                $tipo = $_FILES['imagen']['type'];

                $this->catroute_model->canviar_foto($imagen, $nombre, $tipo);
                redirect('CatRoute/compte_user');
            } 
            else{
                echo "La imagen no ha sido subida";
            }
            
        }else{
            redirect('CatRoute/index');
        }
    }
    
    public function administrar_usuaris() {
        if($this->ion_auth->logged_in() ){
            if($this->ion_auth->is_admin()){
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-logat-admin');
                $this->load->view('web-logat-admin-administrar');
                $this->load->view('templates/footer');
            }else{
                redirect('CatRoute/index');
            }
        }else{
            redirect('CatRoute/index');
        }
    }
    
    public function administracio() {
        if($this->ion_auth->logged_in() ){
            if($this->ion_auth->is_admin()){
                $crud = new grocery_CRUD();
 
                $crud->set_table('users')
                        ->set_subject('Usuaris')
                        ->columns('username','email','first_name','last_name')
                        ->display_as('username','Nick User')
                        ->display_as('email','Email')
                        ->display_as('first_name','Nom User')
                        ->display_as('last_name','Cognom User');
                        
                $crud->fields('username','email','first_name','last_name');

                $output = $crud->render();

                $this->mostrar_crud($output);
                
            }
            else{
                redirect('CatRoute/index');
            }
        }else{
            redirect('CatRoute/index');
        }     
    }
    
    public function administrar_correus() {
        if($this->ion_auth->logged_in() ){
            //consulta a la BD
            $data['correus'] =$this->catroute_model->consultar_correus();
            
            if($this->ion_auth->is_admin()){
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-logat-admin');
                $this->load->view('web-logat-admin-contacte' ,$data);
                $this->load->view('templates/footer');
            }else{
                redirect('CatRoute/index');
            }
        }else{
            redirect('CatRoute/index');
        }
    }
    
    public function administrardor_correus() {
        if($this->ion_auth->logged_in() ){
            if($this->ion_auth->is_admin()){
                $crud = new grocery_CRUD();
 
                $crud->set_table('historial_consulta')
                        ->set_subject('Consultes')
                        ->columns('id_user','nom','cognom','consulta')
                        ->display_as('id_user','ID User')
                        ->display_as('nom','Nom')
                        ->display_as('cognom','Cognom')
                        ->display_as('consulta','Consulta');
                        
                $crud->fields('id_user','nom','cognom','consulta');

                $output = $crud->render();

                $this->mostrar_crud($output);
                
            }
            else{
                redirect('CatRoute/index');
            }
        }else{
            redirect('CatRoute/index');
        }     
    }
    
    public function mostrar_crud($output = null) {
        if($this->ion_auth->logged_in() ){
            if($this->ion_auth->is_admin()){
                $this->load->view('example.php', $output);
            }else{
                redirect('CatRoute/index');
            }
        }else{
            redirect('CatRoute/index');
        }
    }
    
    public function accesoris_moto() {
        if($this->ion_auth->logged_in() ){
            try{
                $articulos = simplexml_load_string(file_get_contents('http://www.formulamoto.es/elementosInt/rss/2520'));
                $data['noticia'] = $articulos;
            }
            catch(Exception $e){
                echo 'Excepción capturada: ',  $e->getMessage(), "\n";
            }
            
            if(!$this->ion_auth->is_admin()){
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-logat-user');
                $this->load->view('web-logat-noticies', $data);
                $this->load->view('templates/footer');
            }
            else{
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-logat-admin');
                $this->load->view('web-logat-noticies', $data);
                $this->load->view('templates/footer');
            }
        }else{
            redirect('CatRoute/index');
        }
    }
  
}