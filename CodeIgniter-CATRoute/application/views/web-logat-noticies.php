<!-- cos web logat user -->
<div class="contingut">
    <div class="col-sm-1"></div>
    <!-- formulari per a crear una ruta -->
    <div id="caixa-inici" class="col-sm-10"> 
        <div class="panel panel-primary">
            <div class="panel-heading">NOTICIES</div>
            <div class="panel-body">
                <?php
                try{
                    foreach($noticia->channel->item as $noticies){
                        echo "<b><a href='".$noticies->link."'><br>".$noticies->title."</a></b><br>";
                        echo $noticies->description;
                        echo "<br>";
                    }
                }
                catch(Exception $e){
                    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
                }
                ?>
            </div>
        </div>
    </div>  
    <div class="col-sm-1"></div>
</div>

