<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h2>To-Do List</h2>
    <form action="add_task.php" method="POST">
        <input type="text" name="task" placeholder="Adicionar nova tarefa">
        <button type="submit">Adicionar</button>
    </form>

    <h3>Tarefas Pendentes</h3>
    <ul>
        <?php
        // incluir conexão de banco de dados
        include 'db_connection.php';

        $sql = "SELECT * FROM tasks WHERE status = 'pending'";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)) {
            echo "<li>" . $row['task'] . " <a href='mark_completed.php?id=" . $row['id'] . "'>[Concluir]</a></li>";
        }
        ?>
    </ul>

    <h3>Tarefas Concluídas</h3>
    <ul>
        <?php

        $sql = "SELECT * FROM tasks WHERE status = 'completed'";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)) {
            echo "<li>" . $row['task'] . " <a href='delete_task.php?id=" . $row['id'] . "'>[Remover]</a></li>";
        }

        // fecha conexão de banco de dados
        mysqli_close($conn);
        ?>
    </ul>
</body>
</html>
