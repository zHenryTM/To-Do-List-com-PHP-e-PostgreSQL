<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Lista de Tarefas</title>
</head>
<body>
    <div class="container">
        
        <h1>Lista de Tarefas</h1>

        <div class="input-group">
            <form action="./scripts/adicionar_nota.php" method="post">
                <input type="text" id="taskInput" name="nota" placeholder="Adicione uma nova tarefa...">
                <button type="submit">Adicionar</button>
            </form>
        </div>

        <ul id="taskList">
            <?php
            
            include_once './scripts/conexao.php';

            $query = "SELECT * FROM notas";
            $result = pg_query($conn, $query);

            // Exibir as notas na lista
            while ($row = pg_fetch_assoc($result)) {
                echo "<li>";
                echo htmlspecialchars($row['nota']);
                echo "<form action='./scripts/deletar_nota.php' method='post' style='display:inline;'>";
                echo "<input type='hidden' name='nota' value='" . htmlspecialchars($row['nota']) . "'>";
                echo "<button class='delete-btn' type='submit'>Deletar</button>";
                echo "</form>";
                echo "</li>";
            }
            ?>
        </ul>

    </div>
</body>
</html>
