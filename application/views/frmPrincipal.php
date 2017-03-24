<?php
$Sesion = $this->session->userdata('sesion_activa');
echo 'Principal';
echo '<br>';
echo $Sesion['Usuario'];
echo '<br>';
echo $Sesion['Foto'];
