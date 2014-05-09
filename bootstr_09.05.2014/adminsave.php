

<?php
for($i=0;$i>100;$i++){
	if (isset($_POST['checkbox'.$i])) 
		echo $_POST['checkbox'.$i].'<br>';
}
$db = mysql_connect('localhost', 'root', '');
if(!$db){
    die('Error!'.mysql_error());
}
mysql_select_db("login", $db);

//DELETE FROM `table` WHERE `number` = номер
//mysql_query('DELETE FROM `users` WHERE `id` ='.$_GET['id']);
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
 // header("Location: http://localhost/simulator-master/simulator-master/bootstr_03.05.2014/main.php");
?>



