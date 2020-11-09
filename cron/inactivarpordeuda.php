<?php 
$conectar = new mysqli("localhost","pruebas_test","2020bmm","juipa");
/* Verificar la conexion */
if($conectar->connect_errno){
    printf ("Error al conectar a la bd: %s\n" , $conectar->connect_errno);
    exit();
}
$array = $conectar->query("SELECT id, pago_mes FROM clientes");


foreach($array as $name ){
	
	$id = $name["id"];
	$pagomes = $name["pago_mes"];
	$deuda = $conectar->query("SELECT SUM(monto) FROM pagos WHERE cliente_id = '$id'");
	if($deuda->fetch_row()[0] >  $pagomes){
		$sql = $conectar->query("UPDATE clientes SET estado=0");
	}
	
}

?>