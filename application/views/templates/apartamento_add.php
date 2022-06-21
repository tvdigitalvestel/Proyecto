<article class="content">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <form method="post" id="data_form" class="form-horizontal">
            <div class="grid_3 grid_4">

                <h5>Nuevo Apartamento</h5>
                <hr>
               
				<div class="form-group row">

                    <label class="col-sm-2 col-form-label"
                           for="amount">Grupos</label>

                    <div class="col-sm-6">
                    	<select id="customergroup" name="customergroup" class="form-control" onchange="cambia()">
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

                    <label class="col-sm-2 col-form-label"
                           for="amount">Edificios</label>

                    <div class="col-sm-6">
                        <select id="sl_Edificio" name="edificios" class="form-control">
                        	<option value="">-</option>
                            </select>
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="body"><?php echo $this->lang->line('') ?>Apartamento</label>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Nombre del apartamento"
                               class="form-control margin-bottom  required" name="localidad">
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label"></label>

                    <div class="col-sm-4">
                        <input type="submit" id="submit-data" class="btn btn-success margin-bottom"
                               value="Crear" data-loading-text="Updating...">
                        <input type="hidden" value="templates/new_apartment" id="action-url">
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
						function cambia(){
					
                                var id_corporacion=$("#customergroup option:selected").val();
                                $.post(baseurl+"customers/consultar_edificios",{id:id_corporacion},function(data){
                                    var options='<option value="">-</option>';
                                        
                                        $(data).each(function(index,val){
                                            options+='<option value="'+val.id+'">'+val.nombre_edificio+'</option>';
                                        });
                                        
                                        $("#sl_Edificio").children().remove();
                                        $("#sl_Edificio").html(options);

                                        //sl_Edificio
                                },'json');
							}
</script>
