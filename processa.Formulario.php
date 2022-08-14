<!DOCTYPE html>
<html lang="pt-br" >
    <head>
        <meta charset="UTF-8">
             <title>Cadastro</title>
			 <link rel="stylesheet" type="text/css" href="layot.css">
    </head>
		
		
		
	<body >
			<div class="Banner">
				<br>
					<h1>Cadastrado com sucesso!</h1>
			</div> 
			<br>
		    <div class="Conteudo">
				<?php
						$arquivo=$_FILES["arq"];
						$destino="imagens/";
						$destino=$destino.$arquivo['name'];
						$res= move_uploaded_file($arquivo['tmp_name'],$destino);
						$nome=$_POST['nome'];
						$senha=$_POST["senha"];
						$sexo=$_POST["Sexo"];
						$Linguagem=$_POST["Linguagem_op"];
									
						
						echo "
							<fieldset>
						
								<legend class='cxconteudo'>
									<h1>Login</h1>
								</legend>
								<p>Nome :  $nome</p>
								<p>Senha : $senha</p>";
													
								if ($sexo == "Masculino"){
								echo "<p>Sexo : $sexo</p>";				
									}
								else{
							
								echo "<p>Sexo :$sexo</p>";
								}

								if($Linguagem == "PHP"){
									echo "<p>Linguagem favorita : $Linguagem</p>";				
										}
									else{
								
									echo "<p>Linguagem favorita : $Linguagem</p>";
									}
						echo "</fieldset>";

						echo "<fieldset>
								<legend >
								<h1>Arquivo</h1>
								</legend>";
								echo "Se voce não esta visualizando o conteúdo, ele é um PDF<p>
								<IMG  src= 'imagens/".$arquivo['name']."'>"; 
									
						echo "</fieldset>";
						
				?>
			</div>
			<br>     
			<div class="rodape"><br>
				Aplicação Web| Suelen Wellina Oliveira| UniProjeção-2022 
			</div> 
                
    </body> 

</html>