<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Админпанель</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <script type="text/javascript" src="js/bootstrap.js"></script>
   <!-- <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.4.custom.js"></script>
    
    <script type="text/javascript" src="jquery.json-1.3.js"></script>-->
</head>

<?php
$db = mysql_connect('localhost', 'root', '');
if(!$db){
    die('Error!'.mysql_error());
}
mysql_select_db("login", $db);

//DELETE FROM `table` WHERE `number` = номер
$sql = mysql_query("SELECT * FROM users WHERE id=".$_GET['id']);
$tablerows = mysql_fetch_row($sql);
mysql_query("UPDATE users SET ban =".$tablerows[3]*(-1)." WHERE id=".$_GET['id']);

  //после получения данных начнём формирование HTML-таблицы


  //выводим строку заголовков 
  //echo ("<tr><td>Адрес</td><td>Описание</td></tr>");
  //функция mysql_fetch_row() извлекает одну строку из результата 
  //и сохраняет её в массиве $tablerows
  /*while ($tablerows = mysql_fetch_row($sql))
  { 
  echo('<tr>
  			<td>
  				<a href="#">'.$tablerows[1].'</a>
  			</td>
  			<td>
  				<a href="del.php?id='.$tablerows[0].'">удалить'.$tablerows[0].'</a>
  			</td>
  			<td>
  				<label class="checkbox">
    				<input type="checkbox">
    			</label>
  			</td>
  		</tr>');
  }
  echo "</table></div>";*/
  //закрытие соединение (рекомендуется)
  //echo('якобы удален юзер с ID='.$_GET['id']);
  mysql_close($db);
	header("Location: http://localhost/simulator-master/simulator-master/bootstr_03.05.2014/admin.php");
?>



