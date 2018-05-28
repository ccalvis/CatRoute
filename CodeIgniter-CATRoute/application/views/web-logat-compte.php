<!-- cos web logat user -->
<div class="contingut">
    <div class="col-sm-3"></div>
    <!-- formulari per a crear una ruta -->
    <div id="caixa-inici" class="col-sm-6"> 
        <div class="panel panel-primary">
            <div class="panel-heading">DADES USUARI</div>
            <div class="panel-body">
                <?php echo "<img style='border-radius:20%; width:130px; height:130px;' src='data:image/jpeg; base64,".base64_encode($imgUser['imatge'])."'>" ?>
                <hr>
                <h4><b>Nom: </b> <?php echo $infoUser['first_name']; ?> </h4>
                <h4><b>Cognoms: </b> <?php echo $infoUser['last_name']; ?> </h4>
                <h4><b>Nick: </b> <?php echo $infoUser['username']; ?> </h4>
                <h4><b>Email: </b> <?php echo $infoUser['email']; ?> </h4>
                <hr>
                <button class="btn btn-primary" id="editar-user">Editar</button>
            </div>
        </div>
    </div>
    <div id="caixa-inici" class="col-sm-6 editar-user-div"> 
        <div class="panel panel-primary">
            <div class="panel-heading">EDITAR DADES USUARI</div>
            <div class="panel-body">
                <h5>(Introduïu els dos camps, no només el que modifiqueu, gràcies)</h5>
                <form method="post" class="form-horizonatal" action="<?= base_url();?>CatRoute/editar_user">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h5><b>Nick:</b></h5>
                            <input name="nick" type="text" class="form-control" id="nick" placeholder="<?php echo $infoUser['username']; ?>" required>
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
                            <button type="submit" class="btn btn-success" id="modificar">Modificar</button> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="caixa-inici" class="col-sm-6 editar-user-div"> 
        <div class="panel panel-primary">
            <div class="panel-heading">EDITAR AVATAR USUARI</div>
            <div class="panel-body">
                <form enctype="multipart/form-data" method="post" class="form-horizonatal" action="<?= base_url();?>CatRoute/editar_avatar">
                    <div class="form-group">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <?php echo "<img style='border-radius:20%; width:130px; height:130px;' src='data:image/jpeg; base64,".base64_encode($imgUser['imatge'])."'>" ?>
                            <br><b>Avatar:</b><br>
                            <input type="file" name="imagen" id="imagen" required/>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                    <div class="col-sm-12"><hr></div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success">Modificar</button> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-3"></div>
       
    
    <script>
        $('.editar-user-div').toggle();
        $('#editar-user').click(function() {
            $('.editar-user-div').slideToggle("slow");
        });
    </script>
    
</div>

