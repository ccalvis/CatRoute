<!-- cos web logat user -->
<div class="contingut">
    <div class="col-sm-1"></div>
    <!-- formulari per a crear una ruta -->
    <div id="caixa-inici" class="col-sm-10"> 
        <div class="panel panel-primary">
            <div class="panel-heading">ADMINISTRAR CORREUS DE CONTACTE</div>
            <div class="panel-body">
                <iframe src="<?php echo site_url("CatRoute/administrardor_correus");?>" width="100%" height="75%" style='border:none;'></iframe>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">CORREUS</div>
            <div class="panel-body">
               <?php 
                for ($i=0; $i<count($correus); $i++){
                    echo "<div class='panel panel-primary'>";
                    echo "<div class='panel-heading'></div>";
                    echo "<div class='panel-body'>";
                    echo "<h4><b>ID user: </b>".$correus[$i]['id_user']."</h4>";
                    echo "<h4><b>Nom: </b>".$correus[$i]['nom']."</h4>";
                    echo "<h4><b>Cognom: </b>".$correus[$i]['cognom']."</h4>";
                    echo "<h4><b>Email: </b>".$correus[$i]['email']."</h4>";
                    echo "<h4><b>Provincia: </b>".$correus[$i]['provincia']."</h4>";
                    echo "<h4><b>Consulta: </b>".$correus[$i]['consulta']."</h4>";
                    echo "</div></div>";
                }
                ?>
            </div>
        </div>
    </div>  
    <div class="col-sm-1"></div>
</div>
