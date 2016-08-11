<?php
	try{
			$conexao = new PDO("mysql:host=localhost; dbname=aulink","root","123");
	}catch(PDOExeption $e){
		echo "Código do Erro : ".$e->getCode()."Erro : ".$e->getMessage();
	}
	
	try{
		$stmt = $conexao->prepare("insert into usuario(nome, senha, login, email, sexo, nascimento) values(?,?,?,?,?,?)");

		$nome=$_POST["nome"]; $senha=$_POST["senha"]; $login=$_POST["usuario"]; $email=$_POST["email"];
		$sexo=$_POST["sexo"]; $nascimento=$_POST["nascimento"];

		$stmt->bindParam(1,$nome);
		$stmt->bindParam(2,$senha);
		$stmt->bindParam(3,$login);
		$stmt->bindParam(4,$email);
		$stmt->bindParam(5,$sexo);
		$stmt->bindParam(6,$nascimento);

		$stmt->execute();
		echo("<script>alert('Cadastro realizado com sucesso!')</script>");
		
		
	}catch(PDOEception $e){
		echo "Houve erro na inserção.".$e->getCod()."-".$e->getMessage();	
	}
?>