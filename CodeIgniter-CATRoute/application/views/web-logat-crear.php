<!-- cos web logat user -->
<div class="contingut">
    <div class="col-sm-2"></div>
    <!-- formulari per a crear una ruta -->
    <div id="caixa-inici" class="col-sm-8"> 
        <div class="panel panel-primary">
            <div class="panel-heading">NOVA RUTA</div>
            <div class="panel-body">
                <div class="col-xs-12">
                    <form method="post" class="form-horizonatal" action="<?= base_url();?>CatRoute/crear_ruta">  
                        <div class="form-group">
                            <div class="col-sm-12">
                                <select class="form-control" required>
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
                                <select class="form-control" required>
                                    <option value="">Tipus de ruta</option>
                                    <option value="passeig">Passeig</option>
                                    <option value="curves">Curves</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <select class="form-control" required>
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
                                <input type="radio" name="mirador" value="yes" required> Si 
                                <input type="radio" name="mirador" value="no" required> No<br><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <h5><b>Estat de la carreter: </b>(On el 1 és molt dolent i el 10 és perfecte)</h5>
                                <input type="radio" name="estat" value="1" required> 1 
                                <input type="radio" name="estat" value="2" required> 2
                                <input type="radio" name="estat" value="3" required> 3
                                <input type="radio" name="estat" value="4" required> 4
                                <input type="radio" name="estat" value="5" required> 5
                                <input type="radio" name="estat" value="6" required> 6
                                <input type="radio" name="estat" value="7" required> 7
                                <input type="radio" name="estat" value="8" required> 8
                                <input type="radio" name="estat" value="9" required> 9
                                <input type="radio" name="estat" value="10" required> 10<br><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <h5><b>Ruta:</b> (noms de pobles i carreteres per on passa)</h5>
                                <textarea class="form-control" rows="5" name="ruta" id="ruta" placeholder="Ruta" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <h5>
                                    <b>URL:</b> (en cas de voler penjar ruta en mapa fes-la en el google maps i introdueix la url)
                                    <button type="submit" class="btn btn-info"><a style="color:white;" href="https://www.google.es/maps/dir///@41.6273327,0.9342984,15z/data=!4m5!4m4!1m1!4e2!1m0!3e0" target="_blank">Google Maps</a></button>
                                </h5>
                                <textarea class="form-control" rows="1" name="url" id="url" placeholder="URL" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <h5><b>Comentari:</b></h5>
                                <textarea class="form-control" rows="5" name="consulta" id="consulta" placeholder="Consulta"></textarea>
                            </div>
                        </div>
                        <!--div class="form-group">
                            <div class="col-sm-12">
                                <h5><b>Mapa:</b></h5>
                                <h5>(1 click per iniciar i 2 per acabar en un punt que no sigui el inicial)</h5>
                                <div id="map"></div>
                                <div id="bar">
                                    <p class="auto"><input type="text" id="autoc"/></p>
                                    <p><a id="clear" href="#">Haz clic aquí</a> para borrar el mapa.</p>
                                </div>
                            </div>
                        </div-->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-8">
                                <button type="submit" class="btn btn-success">Crear</button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
    <div class="col-sm-2"></div>
</div>

<!-- codi del mapa -->
<!--    <script src="https://maps.googleapis.com/maps/api/js?libraries=drawing,places&key=AIzaSyCDgWQD4ePAwvUtdvpVde3J5tQpRuGVpGw"></script> -->

