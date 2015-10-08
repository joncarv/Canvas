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
	
	<h2>Tópicos</h2>
	
	<div id="menu">
		<?php
		$sql = "INSERT INTO mensagens (assunto, mensagem, responsavel, ehPai) VALUES ('$_POST[assunto]','$_POST[mensagem]','$_POST[responsavel]',1)";

		if (mysqli_query($conn, $sql)) {
		    //$last_id = mysqli_insert_id($conn);
		    echo "<span>TÓPICO CRIADO COM SUCESSO.</span>";
		} else {
		    echo "ERRO: " . $sql . " - " . mysqli_error($conn);
		}
		?>
		<div id="menu">
			<ul>
				<li><a href="tarefas.php">[ Tarefas ]</a></li>
				<li><a href="discussoes.php">[ Lista de Discussão ]</a></li>
				<!-- <li><a href="#">[ Membros ]</a></li> -->
			</ul>
		</div>
	</div>
	
	<table id="lista-tarefas">
		<tr>
			<th>Assunto</th>
			<th>Mensagem</th>
			<th>Responsável</th>
		</tr>
			<?php
			$sql = "SELECT id, assunto, mensagem, responsavel FROM mensagens";
			$result = mysqli_query($conn, $sql);			
			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
				$cont = 1;
			    while($row = mysqli_fetch_assoc($result)) {
					if ($cont % 2 == 0){
				  	  	echo "<tr class=\"alt\"><td>" . $row["assunto"]. "</td><td>" . $row["mensagem"] . "</td><td>" . $row["responsavel"] . "</td></tr>";
					}else{
						echo "<tr><td>" . $row["assunto"]. "</td><td>" . $row["mensagem"] . "</td><td>" . $row["responsavel"] . "</td></tr>";
					}
					$cont++;
			        //echo "id: " . $row["id"]. " - Título: " . $row["titulo"]. " - Descrição: " . $row["descricao"] . " - Responsável: " . $row["responsavel"] . "<br>";
			    }
				//} else {
			    //echo "0 results";
			}
			?>
	</table>



<?php
mysqli_close($conn);
?>
</body>
</html>