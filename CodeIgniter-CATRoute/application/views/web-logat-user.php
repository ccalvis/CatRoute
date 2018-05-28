<!-- cos web logat user -->
<div id="contingut">
    <!-- secció esquerra -->
    <div id="caixa-inici" class="col-sm-3"> 
        <div class="panel panel-primary">
            <div class="panel-heading">FILTRES</div>
            <div class="panel-body">
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
                            <input name="contra" type="password" class="form-control" id="pwd" placeholder="Contrasenya">
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
                
            </div>
        </div>
    </div>
        
</div>

