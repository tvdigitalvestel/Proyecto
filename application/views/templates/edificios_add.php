<article class="content">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <form method="post" id="data_form" class="form-horizontal">
            <div class="grid_3 grid_4">

                <h5>Nuevo Edificio</h5>
                <hr>
               
				<div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="amount">Grupo</label>

                    <div class="col-sm-6">
                        <select id="customergroup" name="customergroup" class="form-control">
                        	<option value="">-</option>
                                <?php
                               
                                foreach ($customergrouplist as $row) {
                                    $cid = $row['id'];
                                    $title = $row['title'];
                                    echo "<option value='$cid'>$title</option>";
                                }
                                ?>
                            </select>
                    </div>
                </div>
				
               
               
               <div class="form-group row">
                        <h6><label class="col-sm-12 col-form-label"
                               for="city"><?php echo $this->lang->line('') ?>Direccion</label></h6>
                              
                                 <div class="col-sm-2 mb-1">
                            <input type="text" placeholder="Numero"
                                   class="form-control margin-bottom" name="numero1">
                        </div>

                    	<div class="col-lg-2 mb-1">
						<select class="form-control"  id="discountFormat" name="orientacion">
									<option value=""></option>
									<option value="West">West</option>
                                    <option value="NW">NW</option>
                                    <option value="East">East</option>
                                    
							</select>
						</div>

                       <div class="col-sm-2 mb-1">
                            <input type="text" placeholder="Numero"
                                   class="form-control margin-bottom" name="numero2" id="numero2">
                        </div>
                       
                          <div class="col-sm-2 mb-1">
                            <select class="col-sm-1 form-control" name="adicionaluno">
                                    <option value="">--</option>
                                    
                                    <option value="th">th</option>
                                    <option value="nd">nd</option>
                              
                                    </select>

                        </div>


                          <div class="col-sm-2 mb-1">
                            <select class="col-sm-1 form-control" name="adicional2">
                                    <option value="">--</option>
                                    
                                    <option value="th">th</option>
                                    <option value="Street">Street</option>
                                    <option value="Street">Terrace</option>
                                    <option value="Place">Place</option>
                                    <option value="Avenue">Avenue</option>


                            </select>
                      </div>                      
                      </div>



                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit" id="submit-data" class="btn btn-success margin-bottom"
                               value="Crear" data-loading-text="Updating...">
                        <input type="hidden" value="templates/edificios_input" id="action-url">
                    </div>
                </div>

            </div>
        </form>
        <div class="box"></div>

    </div>

</article>
<script>
//traer ciudad				
$(document).ready(function(){
	$("#depar").change(function(){
		$("#depar option:selected").each(function(){
			idDepartamento = $(this).val();
			//console.log(idDepartamento);
			$.post(baseurl+"customers/ciudades_list",{'idDepartamento': idDepartamento
				},function(data){
				//console.log(data);
					$("#cmbCiudades").html(data);
			})
		})
	})
})
//traer localidad			
$(document).ready(function(){
	$("#cmbCiudades").change(function(){
		$("#cmbCiudades option:selected").each(function(){
			idCiudad = $(this).val();
			//console.log(idDepartamento);
			$.post(baseurl+"customers/localidades_list",{'idCiudad': idCiudad
				},function(data){
				//console.log(data);
					$("#cmbLocalidades").html(data);
			})
		})
	})
})
//traer barrio			
$(document).ready(function(){
	$("#cmbLocalidades").change(function(){
		$("#cmbLocalidades option:selected").each(function(){
			idLocalidad = $(this).val();
			//console.log(idDepartamento);
			$.post(baseurl+"customers/barrios_list",{'idLocalidad': idLocalidad
				},function(data){
				//console.log(data);
					$("#cmbBarrios").html(data);
			})
		})
	})
})	

</script>
