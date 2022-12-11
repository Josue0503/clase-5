<?php
session_start();
//ELIMINA LAS SESIONES
session_unset();
//DESTRUYE LAS SESSIONES
session_destroy();
header("location: ./?logout");