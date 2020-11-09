<?php 
$conectar = new mysqli("localhost","pruebas_test","2020bmm","juipa");
/* Verificar la conexion */
if($conectar->connect_errno){
    printf ("Error al conectar a la bd: %s\n" , $conectar->connect_errno);
    exit();
}
    
$array1 = $conectar->query("SELECT id, pago_mes, estado FROM clientes");

	foreach($array1 as $name ){
		$id = $name["id"];
		
		$estado = $name["estado"];
		$pagomes = $name["pago_mes"];
		$anio = Date("Y");
		$mes = Date("m");
		$timestamp = date("Y-m-d H:i:s");
		if($estado == 1){
			
			$conectar->query("INSERT INTO pagos(mes,anio,monto,estado,cliente_id,created_at ,updated_at)  VALUES('$mes', '$anio', $pagomes, 1,'$id','$timestamp','$timestamp')");
		}
		
	
}

?>