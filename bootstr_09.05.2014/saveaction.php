<?php
$data = json_decode($_POST['jsonData']);
$response = 'Получено параметров '.count($data)."\n";
$mas = array();
foreach ($data as $key=>$value) {
    $mas[$key] = $value;
}
//echo('<pre>');
/*var_dump($mas);
die();*/
//echo ($data['mood']);die();
$db = mysql_connect('localhost', 'root', '');
if(!$db){
    die('Error!'.mysql_error());
}
mysql_select_db("login", $db);

$str = "INSERT INTO saves(`mood`,`hp`,`eat`,`xp`,`rubles`,`ye`)	VALUES ('".$mas["mood"]."','".$mas["hp"]."','".$mas["eat"]."','".$mas["xp"]."','".$mas["rubles"]."','".$mas["ye"]."')";


$sql = mysql_query($str);
//echo $response;
//echo ($str);die();
echo('узбагойся, ты сохранился');
?>