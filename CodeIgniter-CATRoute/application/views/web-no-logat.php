        <!-- Cos de intranet externa -->
        <div class="contingut">
            <div id="caixa-inici" class="col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">BREU DESCRIPCIÓ</div>
                    <div class="panel-body">
                        <h5>Aquí podreu trobar les rutes que van introduïnt els altres usuaris, s'indicarà la ruta i algunes característiques de la mateixa ruta.</h5>
                        <img src="<?php echo site_url("img/biker-407123_1280.jpg")?>" alt="Moto en una carretera" height="25%" class="img-fluid">
                        <!--img src="img/biker-407123_1280.jpg" alt="Moto en una carretera" height="25%" class="img-fluid"-->
                    </div>
                </div>
            </div>
            
            <div id="caixa-inici" class="col-sm-6"> 
                <div class="panel panel-primary">
                    <div class="panel-heading">LOGIN</div>
                    <div class="panel-body">
                        <form method="post" class="form-horizonatal" action="<?= base_url();?>CatRoute/dades_login">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input name="nom" type="text" class="form-control" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input name="contra" type="password" class="form-control" id="pwd" placeholder="Contrasenya">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <div class="checkbox">
                                        <label><input name="recordar" type="checkbox">Recordar-me</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <button type="submit" class="btn btn-success">Entrar</button> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="panel panel-primary">
                    <div class="panel-heading">REGISTRAR</div>
                    <div class="panel-body">
                        <button class="btn btn-primary" id="form-registre-user">Formulari</button>
                        <div id="form-registre"> 
                            <form method="post" class="form-horizonatal" action="<?= base_url();?>CatRoute/dades_registre">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input name="nom" type="text" class="form-control" id="nom" placeholder="Nom" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input name="cognom" type="text" class="form-control" id="cognom" placeholder="Cognom" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input name="nick" type="text" class="form-control" id="nick" placeholder="Nom d'usuari" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Email"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input name="contra" type="password" class="form-control" id="pwd" placeholder="Contrasenya" required>
                                    </div>
                                </div>        
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success">Registrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script>
    $('#form-registre').toggle();
    $('#form-registre-user').click(function() {
        $('#form-registre').slideToggle("slow");
    });
</script>
