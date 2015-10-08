<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "jonn";
$password = "";
$dbname = "canvas";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<html>
<head>
	<script type="text/javascript" src="interact-1.2.5.js"></script>
	<script type="text/javascript" src="canvas.js"></script>
	<link href="canvas.css" rel="stylesheet">
</head>
<body>
	
	<h2>Tarefas</h2>
	
	<div id="menu">
		<ul>
			<li><a href="tarefas.php">[ Tarefas ]</a></li>
			<li><a href="discussoes.php">[ Lista de Discussão ]</a></li>
			<!-- <li><a href="#">[ Membros ]</a></li> -->
		</ul>
	</div>
	
	<table id="lista-tarefas">
		<tr>
			<th>Título</th>
			<th>Descrição</th>
			<th>Responsável</th>
		</tr>
		<?php
		$sql = "SELECT id, titulo, descricao, responsavel FROM tarefas";
		$result = mysqli_query($conn, $sql);			
		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
			$cont = 1;
		    while($row = mysqli_fetch_assoc($result)) {
				if ($cont % 2 == 0){
			  	  	echo "<tr class=\"alt\"><td>" . $row["titulo"]. "</td><td>" . $row["descricao"] . "</td><td>" . $row["responsavel"] . "</td></tr>";
				}else{
					echo "<tr><td>" . $row["titulo"]. "</td><td>" . $row["descricao"] . "</td><td>" . $row["responsavel"] . "</td></tr>";
				}
				$cont++;
		    }
		}
		?>
	</table>


<?php
mysqli_close($conn);
?>
</body>
</html>