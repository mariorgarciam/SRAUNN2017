<?php
$Sesion = $this->session->userdata('sesion_activa');
?>

        <nav class="navbar navbar-default"> 
            <div class="container-fluid"> 
                <div class="navbar-header"> 
                    <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </button> 
                    <a href="<?php echo base_url();?>" class="navbar-brand">Sistema de Registro Académico</a> 
                </div> 
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
                    <ul class="nav navbar-nav"> 
                        <li class="dropdown"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Infraestructura <span class="caret"></span></a> 
                            <ul class="dropdown-menu"> 
                                <li><a href="#">Sedes</a></li> 
                                <li><a href="#">Facultad</a></li>                               
                                <li><a href="#">Carreras</a></li> 
                                <li><a href="#">Asignaturas</a></li>  
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Usuarios</a></li>
                                <li><a href="#">Tipo de Usuario</a></li>
                            </ul> 
                        </li>                           
                        <li class="dropdown"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registro <span class="caret"></span></a> 
                            <ul class="dropdown-menu"> 
                                <li><a href="#">Alumnos</a></li> 
                                <li><a href="#">Docentes</a></li>                                 
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Matricula</a></li> 
                                <li><a href="#">Inscripción</a></li> 
                                <li role="separator" class="divider"></li> 
                                <li><a href="#">Calificaciones</a></li> 
                            </ul> 
                        </li> 
                        <li><a href="#">Historial de Calificaciones</a></li>
                    </ul> 
                    <ul class="nav navbar-nav navbar-right"> 
                        <li class="dropdown"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $Sesion['Usuario']?> <span class="caret"></span></a> 
                            <ul class="dropdown-menu"> 
                                <li><a href="#">Perfil</a></li> 
                                <li><a href="#">Cuenta</a></li> 
                                <li role="separator" class="divider"></li> 
                                <li><a href="<?php echo base_url('usuarios/salir');?>">Cerrar sesión</a></li> 
                            </ul> 
                        </li> 
                    </ul> 
                </div> 
            </div> 
        </nav>