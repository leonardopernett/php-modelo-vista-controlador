<?php

require_once('../models/User_model.php');

$usuario = new User_model();
$matriz_user= $usuario->get_users();

