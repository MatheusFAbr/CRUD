<?php
include("../models/conexao.php");
include("blades/header.php");
?>
<div class="container border rounded mt-5 pt-4 pb-4 ps-4 pe-4 bg-white">
<form action="../controllers/cadastrarAluno.php" method="post">
    <label class="form-label">Nome</label><br>
    <input class="form-control" type="text" name="alunoNome"><br>
    <label class="form-label">Cidade</label><br>
    <input class="form-control" type="text" name="alunoCidade"><br>

    <div class="my-3 row">
        <div class="my-3 col">
            <input class="form-check-input" type="radio" name="alunoSexo" value="m">
            <label class="form-label">Masculino</label>
        </div>
        <div class="my-3 col">
            <input class="form-check-input" type="radio" name="alunoSexo" value="f">
            <label class="form-label">Feminino</label>
        </div>
    </div>
    
    <input class="btn btn-success" type="submit" value="Cadastrar">
</form>
</div>

<?php
//Rodapé da página
include("views/blades/footer.php");
?>