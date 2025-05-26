<?php

    $host = "127.0.0.1";

    $port = "3307";

    $dbName = "lista_tarefas";

    $user = "root";

    $dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

    try{
        $pdo = new PDO($dsn, $user, $senha);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        echo "conexão feita <br>";

        function adicionarTarefa($pdo, string $desc): int{
            $stmt = $pdo->prepare("insert into tarefas (descricao) value (:desc)");


            $stmt->bindParam(":desc", $desc);


            $stmt->execute();


            echo "descricao inserida <br>";

            return $pdo->lastInsertId();

        }


        $tarefa1 = adicionarTarefa($pdo, "tarefa1");
        echo "tarefa 1 adicionada. id: " . $tarefa1 . "<br>";



        $tarefa2 = adicionarTarefa($pdo, "tarefa2");
        echo "tarefa 2 adicionada. id: " . $tarefa2;


    }catch(PDOException $ex){
        echo "erro: " . $ex->getMessage();
        die();
    }finally{
        $pdo = null;
    }

?>