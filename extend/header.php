<?php include '../conexion/conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">

  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Academico</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.css">
	 <link rel="icon" href="../img/ico.png" type="image/png" sizes="16x16"> 
	 <style media="screen">
	   
    header, main, footer {
      padding-left: 300px;
    }
    .button-collpase{
    	display: none;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }

    .button-collpase{
    	display: inherit;
    }
    }
       
	 	
	 </style>
</head>
<body>
<main>

<?php include 'menu_admin.php'; ?>