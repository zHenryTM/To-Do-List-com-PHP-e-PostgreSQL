<?php

include_once './conexao.php';

$nota_antiga = $_POST['nota_antiga'];
$nota_nova = $_POST['nota_nova'];

$query = "UPDATE notas SET nota = $1 WHERE nota = $2";
pg_query_params($conn, $query, array($nota_nova, $nota_antiga));

header('Location: ../index.php');
pg_close($conn);

?>