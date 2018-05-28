<body>
    <!--Barra superior inici-->
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" id="inici" class="navbar-brand">CATRoute</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#" id="rutes-inici"><i class='glyphicon glyphicon-home'></i> Rutes <span class="sr-only">(current)</span></a></li>
                <li><a href="#" id="crear-ruta"><i class='glyphicon glyphicon-plus'></i> Crear ruta</a></li>
                <li><a href="#" id="accesoris"><i class='glyphicon glyphicon-globe'></i> Accesoris moto</a></li>
                <li><a href="#" id="administrar-usuaris"><i class='glyphicon glyphicon-pencil'></i> Administrar</a></li>
                <li><a href="#" id="correus-contacte"><i class='glyphicon glyphicon-envelope'></i> Correus contacte</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" id="compte-user"><i class='glyphicon glyphicon-user'></i> Compte</a></li>
                <li><a href="#" id="logout"><i class='glyphicon glyphicon-off'></i> Salir</a></li>
            </ul>
        </div>
    </nav>

    <script>
        $('#logout').click(function() {
            $(location).attr('href', "<?php echo site_url('CatRoute/logout')?>");
        });  
        
        $('#inici').click(function() {
            $(location).attr('href', "<?php echo site_url('CatRoute/rutes_inici')?>");
        });
        
        $('#rutes-inici').click(function() {
            $(location).attr('href', "<?php echo site_url('CatRoute/rutes_inici')?>");
        });   
        
        $('#crear-ruta').click(function() {
            $(location).attr('href', "<?php echo site_url('CatRoute/crear_ruta')?>");
        });
        
        $('#administrar-usuaris').click(function() {
            $(location).attr('href', "<?php echo site_url('CatRoute/administrar_usuaris')?>");
        });
        
        $('#compte-user').click(function() {
            $(location).attr('href', "<?php echo site_url('CatRoute/compte_user')?>");
        });
        
        $('#accesoris').click(function() {
            $(location).attr('href', "<?php echo site_url('CatRoute/accesoris_moto')?>");
        });
        
        $('#correus-contacte').click(function() {
            $(location).attr('href', "<?php echo site_url('CatRoute/administrar_correus')?>");
        });
    </script>

