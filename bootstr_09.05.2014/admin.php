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
    <script type="text/javascript">
    	function askDel(id)
		{
			if (confirm("Вы действительно хотите удалить?"))
			{
				document.location.href = "del.php"
			}
		}
	</script>
</head>
<body>
<?php 
	$db = mysql_connect('localhost', 'root', '');
	if(!$db){
	    die('Error!'.mysql_error());
	}
	mysql_select_db("login", $db);
	
	$sql = mysql_query("SELECT * FROM users");
?>
	<div class="container">
		<table border="2" class="table table-hover">	
			<tr>
				<th>Логин</th>
				<th>Удалить</th>
				<th>Бан</th>
			</tr>
			<?php while ($tablerows = mysql_fetch_row($sql)){?>
			<tr>
				<td>
					<a href="#"><?php echo $tablerows[1];?></a>
				</td>
				<td>
					<a href="del.php?id='<?php echo $tablerows[0];?>'">удалить</a>
				</td>
				<td>
					<a href="ban.php?id='<?php echo $tablerows[0];?>'"><?php echo $tablerows[3]==(-1) ? 'Забанить гада!': 'Разбанить';?></a>
				</td>
			</tr>
			<?php }?>
		</table>
		<form action="main.php">
			<button  type="submit" class="btn btn-info pull-right">На сайт</button>
		</form>
	</div>
  <?php echo mysql_close($db);?>
</body>
</html>