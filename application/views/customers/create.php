
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<style>
.st-Activo, .st-Instalar , .st-Cortado, .st-Suspendido, .st-Exonerado
{
    text-transform: uppercase;
    color: #fff;
    padding: 4px;
    border-radius: 11px;
    font-size: 15px;
}
.st-Activo
{
 background-color: #4EAA28;
}
.st-Instalar
{
 background-color: #A49F20;
}
.st-Cortado
{
 background-color: #A4282A;
}
.sts-Cortado
{
 color: #A4282A;
}
.sts-Suspendido
{
 color: #2224A3;
}
.st-Suspendido
{
 background-color: #2224A3;
}
.st-Exonerado
{
 background-color: #24A9AB;
}
.st-Compromiso
{
 background-color: #EB8D25;
}
.st-Depurado
{
 background-color: darkcyan;
}
.st-Cartera
{
 background-color:darkgoldenrod;
}
</style>
<article class="content">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <form method="post" id="data_form" class="form-horizontal" name="formulario1">
            <div class="row">

                <h5><?php echo $this->lang->line('') ?> AÑADIR NUEVO USUARIO</h5>
                <hr>
                <div class="col-md-6">
                    <h5><?php echo $this->lang->line('') ?>Datos personales</h5>
                    <hr>
                    <div class="form-group row">
						<input type="hidden" placeholder="Material nombre" class="form-control margin-bottom  required" name="abonado" value="<?php echo $codigo + 1 ?>">
						<div class="col-sm-3">
                        	<h6><label class="col-form-label"
                               for="name"><?php echo $this->lang->line('') ?>1er Nombre</label></h6>
							<div>
                            <input type="text"
                                   class="form-control margin-bottom  required" name="name" id="mcustomer_name">
                        	</div>
						</div>
                        <div class="col-sm-3">
                            <h6><label class="col-form-label"
                               for="apellidos"><?php echo $this->lang->line('') ?>2do Nombre</label></h6>
							<div>
                            <input type="text"
                                   class="form-control margin-bottom" name="dosnombre" id="mcustomer_dosnombre">
                        </div>
                        </div>
                        <div class="col-sm-3">
                            <h6><label class="col-form-label"
                               for="apellidos"><?php echo $this->lang->line('') ?>1er Apellido</label></h6>
							<div>
                            <input type="text"
                                   class="form-control margin-bottom  required" name="unoapellido" id="mcustomer_unoapellido">
                        	</div>
                        </div>
                        <div class="col-sm-3">
                            <h6><label class="col-form-label"
                               for="apellidos"><?php echo $this->lang->line('') ?>2do Apellido</label></h6>
							<div>
                            <input type="text"
                                   class="form-control margin-bottom" name="dosapellido" id="mcustomer_dosapellido">
                        	</div>
                        </div>

                   
                        <div class="col-sm-6">
                            <h6><label class="col-form-label"
                               for="phone"><?php echo $this->lang->line('') ?>Celular</label></h6>
							<div>
                            <input type="text" placeholder="Numero"
                                   class="form-control margin-bottom required" name="celular" id="mcustomer_phone">
                        	</div>
                        </div>
                    
						<div class="col-sm-6">
                       	 <h6><label class="col-form-label" for="celular2">Celular (adi)</label></h6>
							<div>
                            <input type="text" placeholder="Numero adicional"
                                   class="form-control margin-bottom" name="celular2" id="mcustomer_city">
                        	</div>
						</div>
                        <div class="col-sm-6">
                            <h6><label class="col-form-label"
                               for="email"><?php echo $this->lang->line('') ?>Correo</label></h6>
							<div>
                        		<input type="text" placeholder="email"
                                   class="form-control margin-bottom required" name="email" id="mcustomer_email">
                        	</div>
                        </div>                    
                        
                        
                    
						<div class="col-sm-4">
                        <h6><label class="col-form-label"
                               for="nacimiento"><?php echo $this->lang->line('') ?>Feha de nacimiento</label></h6>
							<div>
							<input type="text" class="form-control required" placeholder="Billing Date" name="nacimiento" data-toggle="datepicker" autocomplete="false">
							</div>
						</div>
                      
                       <!-- <div class="col-sm-2">
                            <h6><label class="col-form-label"
                               for="tipo_documento"><?php echo $this->lang->line('') ?>Tipo Dto</label></h6>
							<div>
                            <select class="form-control"  id="mcustomer_country" name="tipo_documento">
										<option value="DNI">DNI</option>
										<option value="CE">CE</option>
										<option value="NIT">NIT</option>
										<option value="PAS">PAS</option>
								</select>                                                                                                                                                                                                                                                                                                           
                        	</div>
                       </div>--->
                        <div class="col-sm-4">
                            <h6><label class="col-form-label"
                               for="documento"><?php echo $this->lang->line('') ?>Nº Documento</label></h6>
							 <div>
                            	<input type="text" placeholder="Numero de documento" class="form-control margin-bottom required" name="documento" id="mcustomer_documento" onfocusout="validar_n_documento()">
                                <a href="#" style="margin-top:1px;" class="btn btn-info" onclick="validar_n_documento()"><i class="icon-refresh"></i></a>
                        	</div>
                        </div>
                    
                    </div>
                    <hr class="col-sm-11">
                    <h5 class="col-sm-11"><?php echo $this->lang->line('') ?>Datos de residencia</h5>
                    <hr class="col-sm-11">
                    <div class="form-group row">
						<div class="col-sm-6">
							 <h6><label class="col-form-label" for="departamento">Estado</label></h6>
							<div>
							<select name="departamento"  id="depar"  class="form-control mb-1">
												<option value="">-</option>
												<?php
													foreach ($departamentos as $row) {
														$cid = $row['idDepartamento'];
														$title = $row['username'];
														$nombre = $row['departamento'];
														echo "<option value='$cid'>$nombre</option>";
													}
													?>
											</select>
							</div>
						</div> 
                        <div class="col-sm-6">
                            <h6><label class="col-form-label"
                               for="ciudad"><?php echo $this->lang->line('') ?>Condados</label></h6>
						    <div>
								<select  id="cmbCiudades"  class="selectpicker form-control" name="ciudad">
								</select>
							</div>  
                        </div>
                    </div>
                    <div class="form-group row">
						<div class="col-sm-6">
                            <h6><label class="col-form-label"
                               for="localidad"><?php echo $this->lang->line('') ?>Ciudades</label></h6>
						    <div id="localidades">
								<select id="cmbLocalidades"  class="selectpicker form-control" name="localidad">
                                </select>
							</div>
                        </div>
						<div class="col-sm-6">
                            <h6><label class="col-form-label"
                               for="barrio"><?php echo $this->lang->line('') ?>Zip Code</label></h6>
						    <div id="barrios">
								<select id="cmbBarrios" class="selectpicker form-control" name="barrio">
                                <option value="0">-</option>
                                </select>
							</div>
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
						<select class="form-control"  id="discountFormat" name="nomenclatura">
									<option value=""></option>
									<option value="West">West</option>
                                    <option value="NW">NW</option>
                                    <option value="East">East</option>
                                    
							</select>
						</div>

                       <div class="col-sm-2 mb-1">
                            <input type="text" placeholder="Numero"
                                   class="form-control margin-bottom" name="numero3" value="" id="numero3">
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
                                    <option value=""></option>
                                    
                                    <option value="th">th</option>
                                    <option value="Street">Street</option>
                                    <option value="Street">Terrace</option>
                                    <option value="Place">Place</option>
                                    <option value="Avenue">Avenue</option>


                            </select>
                        </div>

                            
                                        
                    </div>

                     <div class="form-group row">
                        <div class="col-sm-6">
                            <h6><label class="col-form-label"
                               for="localidad"><?php echo $this->lang->line('') ?>Corporaciones</label></h6>
                            <div id="Corporaciones">
                                <select id="customergroup" name="customergroup" class="form-control" onchange="cambia()" >
                                <?php
                                echo '<option value="' . $customergroup['id'] . '">' . $customergroup['title'] . '</option>';
                                foreach ($customergrouplist as $row) {
                                    $cid = $row['id'];
                                    $title = $row['title'];
                                    echo "<option value='$cid'>$title</option>";
                                }
                                ?>
                            </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h6><label class="col-form-label"
                               for="barrio"><?php echo $this->lang->line('') ?>Edificio</label></h6>
                            <div id="barrios">
                                 <select class="form-control"  id="sl_Edificio" name="sl_Edificio">
                                        <option value="">-</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                

                    <div class="form-group row">
                        <div class="col-sm-6">
                        <h6><label class="col-form-label"
                               for="postbox"><?php echo $this->lang->line('') ?>Residencia</label></h6>
                            <div>
                            <select class="form-control"  id="discountFormat" name="residencia">
                                    <option value="">--</option>
                                    
                                    <option value="Apartamento">Apartamentos</option>
                                    <option value="casa">Casas</option>
                                    <option value="local">Local</option>
                                    
                            </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h6><label class="col-form-label"
                               for="postbox"><?php echo $this->lang->line('') ?>Numero apartamento</label></h6>
                            <div>
                            <select class="form-control"  id="sl_apartamento" name="sl_apartamento">
                                        <option value="">-</option>
                                    </select>
                            </div>
                        </div>
                    </div>
              

                <div class="col-md-6">
                    <h5><?php echo $this->lang->line('') ?>Datos de Facturacion</h5>
                    <div class="form-group row">
                    <hr>

                     


                <!--boton de añadir cliente   ----------> 

            <div class="form-group row">

                <label class="col-sm-5 col-form-label"></label>

                <div class="col-sm-4">
                    <input type="submit" id="submit-data" class="btn btn-success margin-bottom"
                           value="<?php echo $this->lang->line('Add customer') ?>" data-loading-text="Adding...">
                    <input type="hidden" value="customers/addcustomer" id="action-url">
                    <!--<a class="btn btn-success" href="<?=base_url()?>customers/conectar_microtik"  >Conectar</a>-->
                </div>
            </div>
    </div>
    </form>
    </div>
</article>
<div id="modal_validacion_documento" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Usuarios con el mismo documento</h4>
            </div>          
            <div class="modal-body">
                <div class="table-responsive">
                    <table id="clientstable" class="table-striped" cellspacing="0" width="100%">
                        <thead>
                    <tr>
                        <th>#</th>
                        <th>Abonado</th>
                        <th><?php echo $this->lang->line('Name') ?></th>
                        <th>Celular</th>
                        <th>Cedula</th>
                        <th><?php echo $this->lang->line('Address') ?></th>
                        <th >Estado</th>
                        


                    </tr>
                    </thead>
                    <tbody>
                    </tbody>

                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Abonado</th>
                        <th><?php echo $this->lang->line('Name') ?></th>
                        <th>Celular</th>
                        <th>Cedula</th>
                        <th><?php echo $this->lang->line('Address') ?></th>
                        <th>Estado</th>
                        


                    </tr>
                    </tfoot>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" onclick='$("#modal_validacion_documento").modal("hide");'>Aceptar</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var remote_ip_yopal="<?=$ips_remotas['yopal']?>";
    var remote_ip_yopal_gpon="<?=$ips_remotas['yopal_gpon']?>";
    var remote_ip_villanueva="<?=$ips_remotas['villanueva']?>";
    var remote_ip_monterrey="<?=$ips_remotas['monterrey']?>";
    var remote_ip_villanueva_gpon="<?=$ips_remotas['villanueva_gpon']?>";
    
    function selecciona_para_agregar(){
        var elemento=document.getElementById("copy_address");
        //console.log($("#discountFormatServicio").val());
        if(elemento.checked==true){
            var desabilitar=false;
            //console.log($("#mcustomer_name_s").val());
            validar_user_name();
            if($("#mcustomer_name_s").val()=="" || $("#mcustomer_documento_s").val()=="" || $("#discountFormatPerfil").val()=="-" || $("#discountFormatPerfil").val()=="Seleccine..." || $("#discountFormatIpLocal").val()=="-" || $("#Ipremota").val()=="" || $("#mcustomer_comentario_s").val()=="" || $("#tegnologia").val()==""){
                desabilitar=true;
            }
           
            
            if(desabilitar){
                $("#submit-data").attr("disabled", true);    
            }else{
                $("#submit-data").removeAttr("disabled");    
            }
            
        }else{
            $("#submit-data").removeAttr("disabled");
        }
    }

function validar_user_name(){
     var username=$("#mcustomer_name_s").val();
     var sede=$("#id_sede").val();
    var tegnologia_instalacion= $("#tegnologia option:selected").val();
        if(username!=""){
            $.post(baseurl+"customers/validar_user_name",{username:username,sede:sede,tegnologia_instalacion:tegnologia_instalacion},function(data){
                if(data=="disponible"){
                    $("#msg_error_username").css("visibility","hidden");
                    console.log($("#tegnologia").val());
                    if($("#mcustomer_name_s").val()=="" || $("#mcustomer_documento_s").val()=="" || $("#discountFormatPerfil").val()=="-" || $("#discountFormatPerfil").val()=="Seleccine..." || $("#discountFormatIpLocal").val()=="-" || $("#Ipremota").val()=="" || $("#mcustomer_comentario_s").val()=="" || $("#tegnologia").val()==""){
                         $("#submit-data").attr("disabled", true);    

                    }else{
                        $("#submit-data").removeAttr("disabled");    
                    }
                }else{
                    $("#msg_error_username").css("visibility","visible");
                    $("#submit-data").attr("disabled", true);    
                }
            });
        }
}
function ShowSelected()
{
/* Para obtener el valor */
var cod = document.getElementById("producto").value;
alert(cod);
 
/* Para obtener el texto */
var combo = document.getElementById("producto");
var selected = combo.options[combo.selectedIndex].text;
alert(selected);
}
</script>
<script type="text/javascript">	
    var tb;
     $(document).ready(function () {
 tb=$('#clientstable').DataTable({
                    
                    "language":{
                            "processing": "Procesando...",
                            "lengthMenu": "Mostrar _MENU_ registros",
                            "zeroRecords": "No se encontraron resultados",
                            "emptyTable": "Ningún dato disponible en esta tabla",
                            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                            "search": "Buscar:",
                            "infoThousands": ",",
                            "loadingRecords": "Cargando...",
                            "paginate": {
                                "first": "Primero",
                                "last": "Último",
                                "next": "Siguiente",
                                "previous": "Anterior"
                            },
                             "info": "Mostrando de _START_ a _END_ de _TOTAL_ entradas"

                        }
                    
                });
});
    function validar_n_documento(){
        var doc=$("#mcustomer_documento").val();
        if(doc!=" " && doc!=""){
            $.post(baseurl+"customers/validar_n_documento",{'documento':doc},function(data){
                if(data.conteo!=0){
                    tb.ajax.url(baseurl+"customers/lista_por_documento?doc="+doc).load();
                    $("#modal_validacion_documento").modal("show");                    
                }

            },'json');
                
            
               

        }
    }
	var perfil_2 = new Array ("Seleccine...","3Megas","5Megas","5MegasD","10Megas","10MegasSt","15Megas","20Megas","20MegasSt","30Megas","30MegasSt","50Megas","70Megas","80Megas","Cortados");
	var perfil_3 = new Array ("Seleccine...","3MEGAS","5MEGAS","5MDEDI","5MEGAS2","10MEGAS","10MEGASST","10MegasD","20MEGAS","20MEGASST","20MEGASD","30MEGAS","30MEGASST","MOROSOS");
	var perfil_4 = new Array ("Seleccine...","3Megas","5Megas","5MegasD","10Megas","10MegasSt","15Megas","20Megas","20MegasSt","30Megas","30MegasSt","50Megas","80Megas","Cortados");
    var perfil_5 = new Array ("Seleccine...","3Megas","5Megas","5MegasD","10Megas","10MegasSt","15Megas","20Megas","20MegasSt","30Megas","30MegasSt","50Megas","80Megas","Cortados");




    





							//crear funcion que ejecute el cambio
							function cambia(){
							/*	var customergroup;
								customergroup = document.formulario1.customergroup[document.formulario1.customergroup.selectedIndex].value;
								//se verifica la seleccion dada
								if(customergroup!=0){
									mis_opts=eval("perfil_"+customergroup);
									//definimos cuantas obciones hay
									num_opts=mis_opts.length;
									//marcamos obciones en el selector
									document.formulario1.perfil.length = num_opts;
									//colocamos las obciones array
									for(i=0; i<num_opts; i++){
										document.formulario1.perfil.options[i].value=mis_opts[i];
										document.formulario1.perfil.options[i].text=mis_opts[i];
									}
										}else{
											//resultado si no hay obciones
											document.formulario1.perfil.length = 1;
											document.formulario1.perfil.options[0].value="-"
											document.formulario1.perfil.options[0].text="-"											
								}
								document.formulario1.perfil.options[0].selected = true;
                                var tegnologia_instalacion1=$("#tegnologia option:selected").val();
                                if(customergroup=="2"){
                                    $("#Ipremota").val(remote_ip_yopal);
                                    $("#Ipremota2").val(remote_ip_yopal);
                                    if(tegnologia_instalacion1=="GPON"){
                                        $("#Ipremota").val(remote_ip_yopal_gpon);
                                        $("#Ipremota2").val(remote_ip_yopal_gpon);
                                    }
                                }else if(customergroup=="3"){
                                    $("#Ipremota").val(remote_ip_villanueva);
                                    $("#Ipremota2").val(remote_ip_villanueva);
                                    if(tegnologia_instalacion1=="GPON"){
                                        $("#Ipremota").val(remote_ip_villanueva_gpon);
                                        $("#Ipremota2").val(remote_ip_villanueva_gpon);
                                    }
                                }else if(customergroup=="4"){
                                    $("#Ipremota").val(remote_ip_monterrey);
                                    $("#Ipremota2").val(remote_ip_monterrey);
                                }
                                selecciona_para_agregar();*/

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
							

                                var id_edificio=$("#sl_Edificio option:selected").val();
                                $.post(baseurl+"customers/consultar_apartamento",{id:id_edificio},function(data){
                                    var options='<option value="">-</option>';
                                        
                                        $(data).each(function(index,val){
                                            options+='<option value="'+val.id+'">'+val.Apartamentos+'</option>';
                                        });
                                        
                                        $("#sl_apartamento").children().remove();
                                        $("#sl_apartamento").html(options);

                                        //sl_Edificio
                                },'json');
                            
                            }

                            $("#tegnologia").on("change",function(ev){
                                /*var tegnologia_instalacion1=$("#tegnologia option:selected").val();
                                var id_sede=$("#id_sede option:selected").val();
                                if(id_sede=="2"){
                                    $("#Ipremota").val(remote_ip_yopal);
                                    $("#Ipremota2").val(remote_ip_yopal);
                                }else if(id_sede=="3"){
                                    $("#Ipremota").val(remote_ip_villanueva);
                                    $("#Ipremota2").val(remote_ip_villanueva);
                                    if(tegnologia_instalacion1=="GPON"){
                                        $("#Ipremota").val(remote_ip_villanueva_gpon);
                                        $("#Ipremota2").val(remote_ip_villanueva_gpon);
                                    }
                                }else if(id_sede=="4"){
                                    $("#Ipremota").val(remote_ip_monterrey);
                                    $("#Ipremota2").val(remote_ip_monterrey);
                                }*/
                                cambia();
                                cambia2();
                                
                            });	
	var Iplocal_2 = new Array ("10.0.0.1");
    var Iplocal_2gpon = new Array ("10.100.0.1");
	var Iplocal_3 = new Array ("80.0.0.1");
	var Iplocal_4 = new Array ("10.1.100.1");
    var Iplocal_3gpon = new Array ("10.20.0.1");
							//crear funcion que ejecute el cambio
							function cambia2(){
								var customergroup;
								customergroup = document.formulario1.customergroup[document.formulario1.customergroup.			selectedIndex].value;
								//se verifica la seleccion dada
								if(customergroup!=0){
                                    var tegnologia_instalacion1=$("#tegnologia option:selected").val();
                                    if(customergroup==3 && tegnologia_instalacion1=="GPON"){
                                        customergroup="3gpon";
                                    }
                                    if(customergroup==2 && tegnologia_instalacion1=="GPON"){
                                        customergroup="2gpon";
                                    }
									mis_opts=eval("Iplocal_"+customergroup);
									//definimos cuantas obciones hay
									num_opts=mis_opts.length;
									//marcamos obciones en el selector
									document.formulario1.Iplocal.length = num_opts;
									//colocamos las obciones array
									for(i=0; i<num_opts; i++){
										document.formulario1.Iplocal.options[i].value=mis_opts[i];
										document.formulario1.Iplocal.options[i].text=mis_opts[i];
									}
										}else{
											//resultado si no hay obciones
											document.formulario1.Iplocal.length = 1;
											document.formulario1.Iplocal.options[0].value="-"
											document.formulario1.Iplocal.options[0].text="-"											
								}
								document.formulario1.Iplocal.options[0].selected = true;
                                selecciona_para_agregar();

							}
	
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

// script para la mascara de los numeros de celular, se debe agregar la libreria al principio de la pagina

</script>
<script type="text/javascript">
    $("#mcustomer_phone").mask("(000) 000-0000");
    $("#mcustomer_city").mask("(000) 000-0000");

    
     </script>