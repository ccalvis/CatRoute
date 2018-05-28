<!-- cos web logat user -->
<div class="contingut">
    <div class="col-sm-3"></div>
    <!-- formulari per a crear una ruta -->
    <div id="caixa-inici" class="col-sm-6"> 
        <div class="panel panel-primary">
            <div class="panel-heading">EDITAR DADES USUARI</div>
            <div class="panel-body">
                <h5><b>(Introduïu tots els camps, no només els que modifiqueu, gràcies)</b></h5>
                <form method="post" class="form-horizonatal" action="<?= base_url();?>CatRoute/editar_user">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h5><b>Nom:</b></h5>
                            <input name="nom" type="text" class="form-control" id="nom" placeholder="<?php echo $infoUser['first_name']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h5><b>Cognom:</b></h5>
                            <input name="cognom" type="text" class="form-control" id="cognom" placeholder="<?php echo $infoUser['last_name']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h5><b>Nick:</b></h5>
                            <input name="nick" type="text" class="form-control" id="nick" placeholder="<?php echo $infoUser['username']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h5><b>Email:</b></h5>
                            <input name="email" type="email" class="form-control" id="email" placeholder="<?php echo $infoUser['email']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h5><b>Contrasenya:</b></h5>
                            <input name="contra" type="password" class="form-control" id="contra" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-success">Modificar</button> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>  
    <div class="col-sm-3"></div>
</div>

