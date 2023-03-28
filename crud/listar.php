<h4>Listar Peças</h4>

<?php
    $sql = "SELECT * FROM pecas";

    $enviar = $conn->query($sql);

    $qtd = $enviar->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-bordered'>";

        print "<tr>";
        print "<th>Código</th>";
        print "<th>Nome</th>";
        print "<th>Fabricante</th>";
        print "<th>Descrição</th>";
        print "<th>Quantidade</th>";
        print "<th>Ações</th>";
        print "</tr>";

        while($row = $enviar->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->fabricante."</td>";
            print "<td>".$row->descricao."</td>";
            print "<td>".$row->qnt."</td>";
            print "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>

                <button onclick=\"if(confirm('Tem certeza que deseja excuir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print"<p class='alert alert-danger'>Não encontrou resultados</p>";
    }