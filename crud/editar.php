<h4>Editar Peça</h4>

<?php
    $sql = "SELECT * FROM pecas WHERE id=".$_REQUEST["id"];
    $enviar = $conn->query($sql);
    $row = $enviar->fetch_object();
?>
<!-- <form action="?page=salvar" method="POST" onsubmit="return validarCadastro()"> -->
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">

    <div class="form-group first">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" id="nomePeca" value="<?php print $row->nome; ?>">
    </div>

    <div class="form-group">
        <label>Fabricante</label>
        <input type="text" class="form-control" name="fabricante" id="fabPeca" value="<?php print $row->fabricante; ?>">
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <input type="text" class="form-control" name="descricao" id="desPeca" value="<?php print $row->descricao; ?>">
    </div>

    <div class="form-group">
        <label>Quantidade</label>
        <input type="number" class="form-control" name="qnt" id="qntPeca" value="<?php print $row->qnt; ?>">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>