
<?php 
$controladores=$_SESSION['controladores'];
 function getcontrolador($controlador,$controladores){
 	$display="display:none";
 	
 	if (!empty($controladores))
 	{
 	foreach ($controladores as $res)
 	{
 		if($res->nombre_controladores==$controlador)
 		{
 			$display= "display:block";
 			break;
 			
 		}
 	}
 	}
 	
 	return $display;
 }
 
?>



   <ul class="sidebar-menu" data-widget="tree">
       <li class="header">MAIN NAVIGATION</li>
         <li class="treeview"  style="<?php echo getcontrolador("MenuAdministracion",$controladores) ?>"  >
          <a href="#">
            <i class="glyphicon glyphicon-cog"></i> <span>Administración</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li style="<?php echo getcontrolador("Usuarios",$controladores) ?>"><a href="index.php?controller=Usuarios&action=index"><i class="fa fa-circle-o"></i> Usuarios</a></li>
            <li style="<?php echo getcontrolador("Controladores",$controladores) ?>"><a href="index.php?controller=Controladores&action=index"><i class="fa fa-circle-o"></i> Controladores</a></li>
            <li style="<?php echo getcontrolador("Roles",$controladores) ?>"><a href="index.php?controller=Roles&action=index"><i class="fa fa-circle-o"></i> Roles de Usuario</a></li>
            <li style="<?php echo getcontrolador("PermisosRoles",$controladores) ?>"><a href="index.php?controller=PermisosRoles&action=index"><i class="fa fa-circle-o"></i> Permisos Roles</a></li>
            <li style="<?php echo getcontrolador("Estado",$controladores) ?>"><a href="index.php?controller=Estado&action=index"><i class="fa fa-circle-o"></i> Estado</a></li>
            <li style="<?php echo getcontrolador("Privilegios",$controladores) ?>"><a href="index.php?controller=Privilegios&action=index"><i class="fa fa-circle-o"></i> Privilegios</a></li>
            <li style="<?php echo getcontrolador("Actividades",$controladores) ?>"><a href="index.php?controller=Actividades&action=index"><i class="fa fa-circle-o"></i> Actividades</a></li>
            <li style="<?php echo getcontrolador("DepartamentosAdmin",$controladores) ?>"><a href="index.php?controller=DepartamentosAdmin&action=index"><i class="fa fa-circle-o"></i>Departamentos</a></li>
            <li style="<?php echo getcontrolador("Estados",$controladores) ?>"><a href="index.php?controller=Estados&action=index"><i class="fa fa-circle-o"></i>Estados</a></li>
           
           </ul>
        </li>
        
        <li class="treeview"  style="<?php echo getcontrolador("MenuNomina",$controladores) ?>"  >
          <a href="#">
            <i class="glyphicon glyphicon-user"></i> <span>Nomina</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li class="treeview"  style="<?php echo getcontrolador("AdministracionNomina",$controladores) ?>"  >
              <a href="#">
                <i class="fa fa-folder-open-o"></i> <span>Administración</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li style="<?php echo getcontrolador("Departamentos",$controladores) ?>"><a href="index.php?controller=Departamentos&action=index"><i class="fa fa-circle-o"></i> Departamentos</a></li>
                <li style="<?php echo getcontrolador("Empleados",$controladores) ?>"><a href="index.php?controller=Empleados&action=index"><i class="fa fa-circle-o"></i> Empleados</a></li>
                <li style="<?php echo getcontrolador("Horarios",$controladores) ?>"><a href="index.php?controller=Horarios&action=index"><i class="fa fa-circle-o"></i> Horarios</a></li>
                <li style="<?php echo getcontrolador("CuentasEmpleados",$controladores) ?>"><a href="index.php?controller=CuentasEmpleados&action=index"><i class="fa fa-circle-o"></i> Cuentas Bancarias</a></li>
                <li style="<?php echo getcontrolador("NominaAnticiposCuentas",$controladores) ?>"><a href="index.php?controller=Empleados&action=index1"><i class="fa fa-circle-o"></i> Cuentas Contables Empleados</a></li>
    		  </ul>
            </li>
            
            
            <li class="treeview"  style="<?php echo getcontrolador("ProcesosNomina",$controladores) ?>"  >
              <a href="#">
                <i class="fa fa-folder-open-o"></i> <span>Procesos</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li style="<?php echo getcontrolador("Marcaciones",$controladores) ?>"><a href="index.php?controller=Marcaciones&action=index"><i class="fa fa-circle-o"></i> Marcaciones</a></li>
                <li style="<?php echo getcontrolador("PermisosEmpleados",$controladores) ?>"><a href="index.php?controller=PermisosEmpleados&action=index"><i class="fa fa-circle-o"></i>Solicitud Permiso</a></li>
				<li style="<?php echo getcontrolador("VacacionesEmpleados",$controladores) ?>"><a href="index.php?controller=VacacionesEmpleados&action=index"><i class="fa fa-circle-o"></i>Solicitud Vacaciones</a></li>             
            	<li style="<?php echo getcontrolador("HorasExtrasEmpleados",$controladores) ?>"><a href="index.php?controller=HorasExtrasEmpleados&action=index"><i class="fa fa-circle-o"></i>Solicitud Horas Extra</a></li>
            	<li style="<?php echo getcontrolador("AvancesEmpleados",$controladores) ?>"><a href="index.php?controller=AvancesEmpleados&action=index"><i class="fa fa-circle-o"></i>Solicitud Avance</a></li>
             </ul>
            </li>
        
        <li class="treeview"  style="<?php echo getcontrolador("ReportesNomina",$controladores) ?>"  >
          <a href="#">
            <i class="fa fa-folder-open-o"></i> <span>Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li style="<?php echo getcontrolador("ReporteNomina",$controladores) ?>"><a href="index.php?controller=ReporteNomina&action=index"><i class="fa fa-circle-o"></i>Reporte Nomina</a></li>
		  </ul>
        </li>
       </ul>
      </li>
        
        
   
       
 
   
    
     
         <li class="treeview"  style="<?php echo getcontrolador("MenuInformacion",$controladores) ?>"  >
          <a href="#">
            <i class="glyphicon glyphicon-info-sign"></i> <span>Informacion</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li class="treeview"  style="<?php echo getcontrolador("AdministracionContabilidad",$controladores) ?>"  >
              <a href="#">
                <i class="fa fa-folder-open-o"></i> <span>Superintendencia<br>de Bancos</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
               <li class="treeview"  style="<?php echo getcontrolador("AdministracionContabilidad",$controladores) ?>"  >
              <a href="#">
                <i class="fa fa-folder-open-o"></i> <span>Administración</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li style="<?php echo getcontrolador("B17",$controladores) ?>"><a href="index.php?controller=B17&action=index"><i class="fa fa-circle-o"></i>B17</a></li>
                </ul>
               </ul>
            </li>
            
       </ul>
      </li>
      
   
      
       
          
      
  
      

    </ul>
    