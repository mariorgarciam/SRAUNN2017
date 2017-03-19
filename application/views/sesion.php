<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./css/bootstrap.min.css"/>
        <link rel="stylesheet" href="./css/unn.css"/>
        <title>Universidad del Norte de Nicaragua</title>
    </head>
    <body>
 
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 sesion">
                    <h1 class="text-center login-title">Sistema de Registro Académico | UNN</h1>
                    <div class="account-wall">
                        <img class="profile-img" src="./img/unn-logo.png"
                            alt="">
                        <?php   
                        $Atributos = array('id' => 'frmSesion', 'class' => 'form-signin');
                        echo form_open('usuarios/acceder', $Atributos);
                        $Usuario = array(
                            'name'          => 'Usuario',
                            'id'            => 'Usuario',
                            'placeholder'   => 'Nombre de usuario',
                            'Class'         => 'form-control',
                            'type'          => 'text'
                        );
                        $Clave = array(
                            'name'          => 'Clave',
                            'id'            => 'Clave',
                            'placeholder'   => 'Contraseña',
                            'Class'         => 'form-control',
                            'type'          => 'password'
                        );
                        $Entrar = array(
                            'name'          => 'Entrar',
                            'id'            => 'Entrar', 
                            'class'         => 'btn btn-lg btn-success btn-block',
                            'value'         => 'Iniciar sesión'
                        );          

                        echo form_input($Usuario);
                        echo form_error('Usuario'); 
                        echo form_password($Clave);
                        echo form_submit($Entrar);

                        echo form_close(); 
                        ?>
                    </div>
                    <a href="http://www.unnnicaragua.org/" class="text-center new-account">&copy; <?php echo date("Y")?> Universidad del Norte de Nicaragua</a>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        
    </body>
</html>

