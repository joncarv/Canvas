<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="interact-1.2.5.js"></script>
	<script type="text/javascript" src="canvas.js"></script>
	<link href="canvas.css" rel="stylesheet">
</head>
<body>
	
	<h2>Business Model Canvas</h2>

	<div id="menu">
		<ul>
			<li><a href="tarefas.php" target="_blank">[ Tarefas ]</a></li>
			<li><a href="discussoes.php" target="_blank">[ Lista de Discussão ]</a></li>
			<!-- <li><a href="#">[ Membros ]</a></li> -->
		</ul>
	</div>
	
	<div class="container1">
		<div id="canvas-area1" class="flex">
			<span>Key Parterns</span>
			<a href="#openModal1">[ Post-it ]</a>
		</div>
		<div id="canvas-area2" class="flex">
			<span>Key Activities</span>
			<a href="#openModal2">[ Post-it ]</a>
		</div>
		<div id="canvas-area3" class="flex">
			<span>Value Propositions</span>
			<a href="#openModal3">[ Post-it ]</a>
		</div>
		<div id="canvas-area4" class="flex">
			<span>Channels</span>
			<a href="#openModal4">[ Post-it ]</a>
		</div>
		<div id="canvas-area5" class="flex">
			<span>Customer Segments</span>
			<a href="#openModal5">[ Post-it ]</a>
		</div>
		<div id="canvas-area6" class="flex">
			<span>Cost Structure</span>
			<a href="#openModal6">[ Post-it ]</a>
		</div>
	</div>
	
	<div class="container2">
		<div id="canvas-area7" class="flex">
			<span>Key Resources</span>
			<a href="#openModal7">[ Post-it ]</a>
		</div>
		<div id="canvas-area8" class="flex">
			<span>Revenue Streams</span>
			<a href="#openModal8">[ Post-it ]</a>
		</div>
		<div id="canvas-area9" class="flex">
			<span>Customer Relationships</span>
			<a href="#openModal9">[ Post-it ]</a>
		</div>
	</div>
	
	<div id="openModal1" class="modalDialog">
	    <div>
			
	        <h2>Novo Post-it</h2>

			<table border="0">
				<tr>
			    	<td><span>Nota:</span></td>
					<td><input type="text" name="postit-text" id="text1" size="50"></td>
			  	</tr>
			</table>
			
			<a class="link-modal" href="javascript:criarPostit('canvas-area1',1);">[ Inserir ]</a>
			<a class="link-modal" href="#close">[ Fechar ]</a>
	    </div>
	</div>
	
	<div id="openModal2" class="modalDialog">
	    <div>
			
	        <h2>Novo Post-it</h2>

			<table border="0">
				<tr>
			    	<td><span>Nota:</span></td>
					<td><input type="text" name="postit-text" id="text2" size="50"></td>
			  	</tr>
			</table>
			
			<a class="link-modal" href="javascript:criarPostit('canvas-area2',2);">[ Inserir ]</a>
			<a class="link-modal" href="#close">[ Fechar ]</a>
	    </div>
	</div>
	
	<div id="openModal3" class="modalDialog">
	    <div>

	        <h2>Novo Post-it</h2>

			<table border="0">
				<tr>
			    	<td><span>Nota:</span></td>
					<td><input type="text" name="postit-text" id="text3" size="50"></td>
			  	</tr>
			</table>
			
			<a class="link-modal" href="javascript:criarPostit('canvas-area3',3);">[ Inserir ]</a>
			<a class="link-modal" href="#close">[ Fechar ]</a>
	    </div>
	</div>
	
	<div id="openModal4" class="modalDialog">
	    <div>
			
	        <h2>Novo Post-it</h2>

			<table border="0">
				<tr>
			    	<td><span>Nota:</span></td>
					<td><input type="text" name="postit-text" id="text4" size="50"></td>
			  	</tr>
			</table>
			
			<a class="link-modal" href="javascript:criarPostit('canvas-area4',4);">[ Inserir ]</a>
			<a class="link-modal" href="#close">[ Fechar ]</a>
	    </div>
	</div>
	
	<div id="openModal5" class="modalDialog">
	    <div>
			
	        <h2>Novo Post-it</h2>

			<table border="0">
				<tr>
			    	<td><span>Nota:</span></td>
					<td><input type="text" name="postit-text" id="text5" size="50"></td>
			  	</tr>
			</table>
			
			<a class="link-modal" href="javascript:criarPostit('canvas-area5',5);">[ Inserir ]</a>
			<a class="link-modal" href="#close">[ Fechar ]</a>
	    </div>
	</div>
	
	<div id="openModal6" class="modalDialog">
	    <div>
			
	        <h2>Novo Post-it</h2>

			<table border="0">
				<tr>
			    	<td><span>Nota:</span></td>
					<td><input type="text" name="postit-text" id="text6" size="50"></td>
			  	</tr>
			</table>
			
			<a class="link-modal" href="javascript:criarPostit('canvas-area6',6);">[ Inserir ]</a>
			<a class="link-modal" href="#close">[ Fechar ]</a>
	    </div>
	</div>
	
	<div id="openModal7" class="modalDialog">
	    <div>
			
	        <h2>Novo Post-it</h2>

			<table border="0">
				<tr>
			    	<td><span>Nota:</span></td>
					<td><input type="text" name="postit-text" id="text7" size="50"></td>
			  	</tr>
			</table>
			
			<a class="link-modal" href="javascript:criarPostit('canvas-area7',7);">[ Inserir ]</a>
			<a class="link-modal" href="#close">[ Fechar ]</a>
	    </div>
	</div>
	
	<div id="openModal8" class="modalDialog">
	    <div>
			
	        <h2>Novo Post-it</h2>

			<table border="0">
				<tr>
			    	<td><span>Nota:</span></td>
					<td><input type="text" name="postit-text" id="text8" size="50"></td>
			  	</tr>
			</table>
			
			<a class="link-modal" href="javascript:criarPostit('canvas-area8',8);">[ Inserir ]</a>
			<a class="link-modal" href="#close">[ Fechar ]</a>
	    </div>
	</div>
	
	<div id="openModal9" class="modalDialog">
	    <div>
			
	        <h2>Novo Post-it</h2>

			<table border="0">
				<tr>
			    	<td><span>Nota:</span></td>
					<td><input type="text" name="postit-text" id="text9" size="50"></td>
			  	</tr>
			</table>
			
			<a class="link-modal" href="javascript:criarPostit('canvas-area9',9);">[ Inserir ]</a>
			<a class="link-modal" href="#close">[ Fechar ]</a>
	    </div>
	</div>
	
	<div id="openModal10" class="modalDialog">
		<div>
			<h2>Definir Tarefa</h2>
			<form name="tarefa_form" action="tarefa.php" method="post" target="_blank" >
				
				<table border="0">
					<tr>
				    	<td><span>Título:</span></td>
						<td><input type="text" name="titulo" size="40" /></td>
				  	</tr>
				 	<tr>
				  		<td><span>Descrição:</span></td>
						<td><textarea name="descricao" cols="38" rows="4"></textarea></td>
				    	<!-- <td><input type="text" name="descricao" size="40" /></td> -->
				  	</tr>
				  	<tr>
					  	<td><span>Responsável:</span></td>
					  	<td><input type="text" name="responsavel" size="40" /></td>
				  	</tr>
				</table>
 
				<a class="link-modal" href="javascript:saveFormTarefa();">[ Salvar ]</a>
				<a class="link-modal" href="#close">[ Fechar ]</a>
			</form>
		</div>
	</div>
	
	<div id="openModal11" class="modalDialog">
		<div>
			<h2>Criar Tópico</h2>
			<form name="discussao_form" action="mensagem.php" method="post" target="_blank" >
				
				<table border="0">
					<tr>
				    	<td><span>Assunto:</span></td>
						<td><input type="text" name="assunto" size="40" /></td>
				  	</tr>
				 	<tr>
				  		<td><span>Mensagem:</span></td> 
				    	<!-- <td><input type="text" name="mensagem" size="40" /></td> -->
						<td><textarea name="mensagem" cols="38" rows="4"></textarea></td>
				  	</tr>
				  	<tr>
					  	<td><span>Iniciado por:</span></td>
					  	<td><input type="text" name="responsavel" size="40" /></td>
				  	</tr>
				</table>
 
				<a class="link-modal" href="javascript:saveFormDiscussao();">[ Salvar ]</a>
				<a class="link-modal" href="#close">[ Fechar ]</a>
			</form>
		</div>
	</div>
</body>
</html>