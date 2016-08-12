<?php
	try{
			$conexao = new PDO("mysql:host=localhost; dbname=AuLink","root","123");
	}catch(PDOExeption $e){
		echo "Código do Erro : ".$e->getCode()."Erro : ".$e->getMessage();
	}
	
	try{
		$stmt = $conexao->prepare("insert into usuarios(nome, email, ddd, telefone, endereco, cidade, estado, bairro, pais, login, senha, news, sexo, nascimento) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

		$nome= $_POST ["nome"];
		$email= $_POST ["email"];
		$ddd= $_POST ["ddd"];
		$tel= $_POST ["telefone"];
		$endereco= $_POST ["endereco"];
		$cidade= $_POST ["cidade"];
		$estado= $_POST ["estado"];
		$bairro = $_POST ["bairro"];
		$pais= $_POST ["pais"];
		$login= $_POST ["login"];
		$senha= $_POST ["senha"];
		$news= $_POST ["news"];
		$sexo= $_POST ["sexo"];
		$sexo= $_POST ["nascimento"];

		$stmt->bindParam(1,$nome);
		$stmt->bindParam(2,$email);
		$stmt->bindParam(3,$ddd);
		$stmt->bindParam(4,$telefone);
		$stmt->bindParam(5,$endereco);
		$stmt->bindParam(6,$cidade);
		$stmt->bindParam(7,$estado);
		$stmt->bindParam(8,$bairro);
		$stmt->bindParam(9,$pais);
		$stmt->bindParam(10,$login);
		$stmt->bindParam(11,$senha);
		$stmt->bindParam(12,$newa);
		$stmt->bindParam(13,$sexo);
		$stmt->bindParam(14,$nascimento);

		$stmt->execute();
		echo("<script>alert('Cadastro realizado com sucesso!')</script>");
		
		
	}catch(PDOEception $e){
		echo "Houve erro na inserção.".$e->getCod()."-".$e->getMessage();	
	}
?>

<br><a href="inserir.php">Clique aqui para inserir um novo registro.</a>
<br><a href="lista.php">Clique aqui para visualizar os registros.</a>
</body>
</html>
