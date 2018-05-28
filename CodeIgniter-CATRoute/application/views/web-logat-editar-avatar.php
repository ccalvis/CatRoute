<!-- cos web logat user -->
<div class="contingut">
    <div class="col-sm-3"></div>
    <!-- formulari per a crear una ruta -->
    <div id="caixa-inici" class="col-sm-6"> 
        <div class="panel panel-primary">
            <div class="panel-heading">EDITAR DADES USUARI</div>
            <div class="panel-body">
                <form method="post" class="form-horizonatal" action="<?= base_url();?>CatRoute/editar_avatar">
                    <div class="form-group">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <?php echo "<img style='border-radius:20%; width:130px; height:130px;' src='data:image/jpeg; base64,".base64_encode($imgUser['imatge'])."'>" ?>
                            <br><b>Avatar:</b><br>
                            <input type="file" name="imagen" id="imagen"/>
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
</div>


