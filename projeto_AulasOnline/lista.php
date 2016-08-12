<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '*******';
$banco = 'AuLink';

$link = mysql_connect($servidor, $usuario, $senha)
or die('Não foi possível conectar: ' . mysql_error());

$select = mysql_select_db($banco);

$sql = "select * from usuarios";
?>
<html>
	<table border=1>
		<tr>
		<td>Código</td>
		<td>Usuário</td>
		<td>Canal</td>
		<td>Área de conhecimento</td>
		</tr>

<?
$result = mysql_query($sql);
while ($tbl = mysql_fetch_array($result);
{
$Codigo = $tbl["ID"];
$Usuario = $tbl["Usuário"];
$Canal = $tbl["Canal"];
$Area_de_conhecimento = $tbl["Área de conhecimento"];

echo "<tr>";
echo "<td>$Codigo</td>";
echo "<td>$Usuario</td>";
echo "<td>$Canal</td>";
echo "<td>$Area_de_conhecimento</td>";
echo "</tr>";
{
?>

</table>
<br><a href="inserir.php">Clique aqui para inserir um novo registro.</a>
</html>



		
		


