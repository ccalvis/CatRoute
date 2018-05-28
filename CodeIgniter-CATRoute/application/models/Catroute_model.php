<?php
class Catroute_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
        $this->load->helper('url');
    }   
 
    public function pujar_foto($id_user, $nom, $tipo, $foto) {
        $data = array(
            'id_user'=>$id_user,
            'nom'=>$nom,
            'tipo'=>$tipo,
            'imatge'=>$foto
        );
        return $this->db->insert('avatar', $data);
    }
    
    public function canviar_foto($imagen, $nombre, $tipo) {
        $id_user = $this->ion_auth->get_user_id();
        $data = array(
            'nom'=>$nombre,
            'tipo'=>$tipo,
            'imatge'=>$imagen
        );
        $this->db->where('id_user',$id_user);
        return $this->db->update('avatar',$data);
    }
    
    public function consultar_user() {
        $id_user = $this->ion_auth->get_user_id();
        //info usuari
        $this->db->select('first_name, last_name, username, email');
        $this->db->from('users');
        $this->db->where('id', $id_user);
        $query = $this->db->get();
        return $query->row_array();
    }
    
    public function editar_user($nick, $contra) {
        $id_user = $this->ion_auth->get_user_id();
        $password_hashed = $this->bcrypt->hash($contra);
        $data = array(
            'username'=>$nick,
            'password'=>$password_hashed
        );
        $this->db->where('id',$id_user);
        return $this->db->update('users',$data);
    }
        
    public function consultar_img_user() {
        $id_user = $this->ion_auth->get_user_id();
        //imatge usuari
        $this->db->select('imatge');
        $this->db->from('avatar');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get();
        return $query->row_array();
    }
    
    public function insertar_coonsulta($nom, $cognom, $email, $provincia, $consulta) {
        $id_user = $this->ion_auth->get_user_id();
        $data = array(
            'id_user'=>$id_user,
            'nom'=>$nom,
            'cognom'=>$cognom,
            'email'=>$email,
            'provincia'=>$provincia,
            'consulta'=>$consulta
        );
        return $this->db->insert('historial_consulta', $data);
    }
    
    public function insertar_ruta($tipusMoto, $tipusRuta, $estacio, $mirador, $estatCarretera, $ruta, $url, $comentari) {
        $id_user = $this->ion_auth->get_user_id();
        $data = array(
            'id_user'=>$id_user,
            'tipus_moto'=>$tipusMoto,
            'tipus_ruta'=>$tipusRuta,
            'estacio'=>$estacio,
            'mirador'=>$mirador,
            'estat_carretera'=>$estatCarretera,
            'ruta'=>$ruta,
            'url'=>$url,
            'comentari'=>$comentari
        );
        return $this->db->insert('rutes', $data);
    }
    
    public function consulta_rutes() {
        $this->db->select('*');
        $this->db->from('rutes');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function consultar_correus() {
        $this->db->select('*');
        $this->db->from('historial_consulta');
        $query = $this->db->get();
        return $query->result_array();
    }
    
}
