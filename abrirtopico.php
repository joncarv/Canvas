<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "jonn";
$password = "";
$dbname = "canvas";
$id_topico = $_GET["id"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST) && $id_topico == NULL) {
	//echo "SALVANDO NOVA RESPOSTA!";
	//echo $_POST[mensagem];
	//echo $_POST[responsavel];
	//echo $_POST[idPai];
	
	$sql = "INSERT INTO mensagens (mensagem, responsavel, pai, ehPai) VALUES ('$_POST[mensagem]','$_POST[responsavel]','$_POST[idPai]',0)";

	if (!mysqli_query($conn, $sql)) {
	    echo "ERRO: " . $sql . " - " . mysqli_error($conn);
	}
	
	$id_topico = $_POST[idPai];
}
?>

<html>
<head>
	<script type="text/javascript" src="interact-1.2.5.js"></script>
	<script type="text/javascript" src="canvas.js"></script>
	<link href="canvas.css" rel="stylesheet">
</head>
<body>
	
	<h2>Lista de Discussão</h2>
	
	<div id="menu">
		<ul>
			<li><a href="tarefas.php">[ Tarefas ]</a></li>
			<li><a href="discussoes.php">[ Lista de Discussão ]</a></li>
			<!-- <li><a href="#">[ Membros ]</a></li> -->
		</ul>
	</div>
	
	
		<?php
		$sql1 = "SELECT assunto, mensagem, responsavel, reg_date FROM mensagens WHERE id = " . $id_topico;
		$result1 = mysqli_query($conn, $sql1);			
		if (mysqli_num_rows($result1) > 0) {
		    
		    if($row = mysqli_fetch_assoc($result1)) {
				
				echo "<h3>" . strtoupper($row["assunto"]) . "</h3>";
				echo "<h4>Por " . $row["responsavel"] . " em " . $row["reg_date"] . "</h4>";
				
				//echo "<a class=\"link-topico\" href=\"#openModal\">[ Responder ]</a>";
				//echo "<div class=\"mensagem-principal\">" . $row["mensagem"] . "</div>";
				
				
				echo "<table id=\"lista-topicos\">";
				echo "<tr class=\"main\"><td width=\"20%\" align=\"right\">" . "<a class=\"link-topico\" href=\"#openModal\">[ Responder ]</a>" . "</td><td>" . $row["mensagem"] . "</td></tr>";
				
		    }
		}
		
		
		$sql2 = "SELECT mensagem, responsavel, reg_date FROM mensagens WHERE pai = " . $id_topico;
		$result2 = mysqli_query($conn, $sql2);			
		if (mysqli_num_rows($result2) > 0) {
		    $cont = 1;
		    while($row = mysqli_fetch_assoc($result2)) {
				if ($cont % 2 == 0){
					echo "<tr class=\"alt\"><td width=\"20%\" align=\"right\">Por " . $row["responsavel"] . "</td><td>" . $row["mensagem"] . "</td></tr>";
				}else{
					echo "<tr><td width=\"20%\" align=\"right\">Por " . $row["responsavel"] . "</td><td>" . $row["mensagem"] . "</td></tr>";
				}
				$cont++;
		    }
		}
		?>
		</table>
	
	
	<div id="openModal" class="modalDialog">
		<div>
			<h2>Responder Tópico</h2>
			<form name="mensagem_form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >
				
				<table border="0">
				  	<tr>
					  	<td><span>Nome:</span></td>
					  	<td><input type="text" name="responsavel" size="40" /></td>
				  	</tr>
				 	<tr>
				  		<td><span>Mensagem:</span></td> 
				    	<!-- <td><input type="text" name="mensagem" size="40" /></td> -->
						<td><textarea name="mensagem" cols="38" rows="10"></textarea></td>
						<input type="hidden" name="idPai" value="<?php echo $id_topico; ?>" />
				  	</tr>
				</table>
 
				<a class="link-modal" href="javascript:saveFormMensagem();">[ Salvar ]</a>
				<a class="link-modal" href="#close">[ Fechar ]</a>
			</form>
		</div>
	</div>
	


<?php
mysqli_close($conn);
?>
</body>
</html>