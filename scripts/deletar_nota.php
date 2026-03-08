<?php

include_once './conexao.php';

$nota = trim($_POST['nota']);

if (empty($nota)) {
    header('Location: ../index.php');
    exit;
}

$query = "DELETE FROM notas WHERE nota = $1";
$result = pg_query_params($conn, $query, array($nota));

header('Location: ../index.php');

pg_close($conn);

?>
