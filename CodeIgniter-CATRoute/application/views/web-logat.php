<!-- cos web logat user -->
<div class="contingut">
    <!-- secció esquerra -->
    <div id="caixa-inici" class="col-sm-3"> 
        <div class="panel panel-primary">
            <div class="panel-heading">FILTRES</div>
            <div class="panel-body">
                <div class="alert alert-danger">Aquesta funció s’implementarà en la pròxima actualització, gràcies.</div>
                <form method="post" class="form-horizonatal" action="<?= base_url();?>CatRoute/dades_login">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <select class="form-control">
                                <option value="">Tipus de moto</option>
                                <option value="carretera">Carretera</option>
                                <option value="trail">Trail</option>
                                <option value="naked">Naked</option>
                                <option value="scooter">Scooter</option>
                                <option value="supermotard">Supermotard</option>
                            </select>
                        </div>
                    </div>
                   <div class="form-group">
                        <div class="col-sm-12">
                            <select class="form-control">
                                <option value="">Tipus de ruta</option>
                                <option value="passeig">Passeig</option>
                                <option value="curves">Curves</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <select class="form-control">
                                <option value="">Temporada en que l'has fet</option>
                                <option value="hivern">Hivern</option>
                                <option value="primavera">Primavera</option>
                                <option value="estiu">Estiu</option>
                                <option value="tardor">Tardor</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h5><b>Hi ha miradors:</b></h5>
                            <input type="radio" name="mirador" value="yes"> Si 
                            <input type="radio" name="mirador" value="no"> No<br><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-success">Filtrar</button> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- web central -->
    <div id="caixa-inici" class="col-sm-9"> 
        <div class="panel panel-primary">
            <div class="panel-heading">RUTES</div>
            <div class="panel-body">
                <?php 
                for ($i=0; $i<count($rutes); $i++){
                    echo "<div class='panel panel-primary'>";
                    echo "<div class='panel-heading'></div>";
                    echo "<div class='panel-body'>";
                    echo "<h4><b>Tipus moto: </b>".$rutes[$i]['tipus_moto']."</h4>";
                    echo "<h4><b>Tipus ruta: </b>".$rutes[$i]['tipus_ruta']."</h4>";
                    echo "<h4><b>Estacio del any: </b>".$rutes[$i]['estacio']."</h4>";
                    echo "<h4><b>Miradors: </b>".$rutes[$i]['mirador']."</h4>";
                    echo "<h4><b>Estat de la carretera: </b>".$rutes[$i]['estat_carretera']."</h4>";
                    echo "<h4><b>Ruta: </b>".$rutes[$i]['ruta']."</h4>";
                    echo "<h4><b>Mapa: </b><a href='".$rutes[$i]['url']."' target='_blanck'><img src='".site_url('img/maps.jpg')."' alt='Maps' height='15%' class='img-fluid'></a></h4>"; 
                    echo "<h4><b>Comentari: </b>".$rutes[$i]['comentari']."</h4>";
                    echo "</div></div>";
                }
                ?>
            </div>
        </div>
    </div>
        
</div>

