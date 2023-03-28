<?php
    echo"<h4>Salvar Peça</h4>";

    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $fab = $_POST["fabricante"];
            $des = $_POST["descricao"];
            $qnt = $_POST["qnt"];

            $sql = "INSERT pecas (nome,fabricante,descricao,qnt) VALUES  
                ('{$nome}', '{$fab}','{$des}','{$qnt}')";
                $enviar = $conn ->query($sql);
            
            if($enviar == true){
                print"<script>alert('Peça cadastrada com sucesso 😉')</script>";
                print"<script> location.href='?page=listar'</script>";
            }else{
                print"<script>alert('Não foi possivel cadastrar 😢')</script>";
                print"<script> location.href='?page=listar'</script>";
            }
        break;
        case 'editar':
            $nome = $_POST["nome"];
            $fab = $_POST["fabricante"];
            $des = $_POST["descricao"];
            $qnt = $_POST["qnt"];

            $sql = "UPDATE pecas SET
                        nome='{$nome}',
                        fabricante='{$fab}',
                        descricao='{$des}',
                        qnt='{$qnt}'
                    WHERE
                        id=".$_REQUEST["id"];

            $enviar = $conn->query($sql);

            if($enviar == true){
                print"<script>alert('Peça editada com sucesso 😉')</script>";
                print"<script> location.href='?page=listar'</script>";
            }else{
                print"<script>alert('Não foi possivel editar 😢')</script>";
                print"<script> location.href='?page=listar'</script>";
            }
        break;
        case 'excluir':
            $sql = "DELETE FROM pecas WHERE id=".$_REQUEST["id"];

            $enviar = $conn->query($sql);

            if($enviar == true){
                print"<script>alert('Peça excluida com sucesso 😉')</script>";
                print"<script> location.href='?page=listar'</script>";
            }else{
                print"<script>alert('Não foi possivel excluir 😢')</script>";
                print"<script> location.href='?page=listar'</script>";
            }
        break;
    }