<?php 
include '../conexion/conexion.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hola alertas</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.css">
	
</head>
<body>
<?php 
$mensaje = htmlentities($_GET['msj']);
$c = htmlentities($_GET['c']);
$p = htmlentities($_GET['p']);
$t = htmlentities($_GET['t']);
switch ($c) {
	case 'us':
		$carpeta = '../usuario/';
		break;
}
switch ($p) {
	case 'in':
		$pagina = 'index.php';
		break;
}
$dir = $carpeta.$pagina;
if ($t=="error") {
	# code...
	$titulo = "Opps...";
}else{
	$titulo = "buen trabajo";
}
 ?>



<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="	  crossorigin="anonymous"></script>
<script src="../js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.js"></script>
<script >
	
swal({
  title: '<?php echo $titulo ?>',
  text: "<?php echo $mensaje ?>",
  type: '<?php echo $t ?>',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'Ok'
}).then(function(){
location.href='<?php echo $dir ?>';
});
/* si o si nos enviara*/
$(document).click(function(){
location.href='<?php echo $dir ?>';
});
$(document).keyup(function(){
if (e.which == 27) {
location.href='<?php echo $dir ?>';
} });

</script>
</body>
</html>