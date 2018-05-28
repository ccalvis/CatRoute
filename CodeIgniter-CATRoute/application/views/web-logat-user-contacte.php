<!-- cos web logat user -->
<div class="contingut">
    <div class="col-sm-2"></div>
    <!-- formulari per a crear una ruta -->
    <div id="caixa-inici" class="col-sm-8"> 
        <div class="panel panel-primary">
            <div class="panel-heading">FORMULARI DE CONTACTE</div>
            <div class="panel-body">
                <form method="post" class="form-horizonatal" action="<?= base_url();?>Contacte/enviar">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h5><b>*Nom:</b></h5>
                            <input name="nom" type="text" class="form-control" id="nom" placeholder="Nom" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h5><b>*Cognoms:</b></h5>
                            <input name="cognom" type="text" class="form-control" id="cognom" placeholder="Cognoms" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h5><b>*Email:</b></h5>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h5><b>Provincia:</b></h5>
                            <input name="provincia" type="text" class="form-control" id="provincia" placeholder="Provincia">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h5><b>*Consulta:</b></h5>
                            <textarea class="form-control" rows="5" name="consulta" id="consulta" placeholder="Consulta"></textarea>
                        </div>
                    </div>
                    *Camps obligatoris
                    <br><br>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-success">Enviar</button> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>  
    <div class="col-sm-2"></div>
</div>

