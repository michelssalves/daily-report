<?php
session_start();
require_once 'config.php';
include 'topo.php';
include 'bd.class.php';
$id = $_SESSION['lid']; 
?>
<form method="POST">  
<label><center>Numero RD</label><br> 
<input readonly value="<?= $id ?>"type="text"><br> 
<label>Matricula Coletor 01</label><br> 
    <select id="coletor1" name="coletor1">
        <option>Escolha a Matricula</option>
        <?php
        $sql = $pdo->prepare("SELECT * FROM funcionarios  WHERE funcao = 'COLETOR' AND setor = 'DOMICILIAR' ORDER BY matricula");
        $sql->execute();
        $fetchAll = $sql->fetchAll();
        foreach ($fetchAll as $funcionario) {
            echo '<option value="' . $funcionario['id'] . '">' . $funcionario['matricula'] . '</option>';
        }
        ?>
    </select><br>
    <input hidden id="coletor01" name="coletor01" type="text">
    <label>Nome</label><br>
    <input readonly id="nome01" name="nome" type="text"><br>

    <label>Matricula Coletor 02</label><br>   
    <select id="coletor2" name="coletor2">
        <option>Escolha a Matricula</option><br>
        <?php
        $sql = $pdo->prepare("SELECT * FROM funcionarios  WHERE funcao = 'COLETOR' AND setor = 'DOMICILIAR' ORDER BY matricula");
        $sql->execute();
        $fetchAll = $sql->fetchAll();
        foreach ($fetchAll as $funcionario) {
            echo '<option value="' . $funcionario['id'] . '">' . $funcionario['matricula'] . '</option>';
        }
        ?>
    </select><br>
    <input hidden id="coletor02" name="coletor02" type="text">
    <label>Nome</label><br>
    <input readonly id="nome02" name="nome" type="text"><br>

    <label>Matricula Coletor 03</label><br> 
    <select id="coletor3" name="coletor3">
        <option>Escolha a Matricula</option>
        <?php
        $sql = $pdo->prepare("SELECT * FROM funcionarios  WHERE funcao = 'COLETOR' AND setor = 'DOMICILIAR' ORDER BY matricula");
        $sql->execute();
        $fetchAll = $sql->fetchAll();
        foreach ($fetchAll as $funcionario) {
            echo '<option value="' . $funcionario['id'] . '">' . $funcionario['matricula'] . '</option>';
        }
        ?>
    </select><br>
    <input hidden id="coletor03" name="coletor03" type="text">
    <label>Nome</label><br>
    <input readonly id="nome03" name="nome" type="text"><br>

    <label>Matricula Coletor 04</label><br> 
    <select id="coletor4" name="coletor4">
        <option>Escolha a Matricula</option>
        <?php
        $sql = $pdo->prepare("SELECT * FROM funcionarios  WHERE funcao = 'COLETOR' AND setor = 'DOMICILIAR' ORDER BY matricula");
        $sql->execute();
        $fetchAll = $sql->fetchAll();
        foreach ($fetchAll as $funcionario) {
            echo '<option value="' . $funcionario['id'] . '">' . $funcionario['matricula'] . '</option>';
        }
        ?>
    </select><br>
    <input hidden id="coletor04" name="coletor04" type="text">
    <label>Nome</label><br>
    <input readonly id="nome04" name="nome" type="text"><br><br>

<button type="submit" name="acao" value="saida-da-garagem">Gravar</button>
<input hidden name="id"  value="<?= $id ?>"type="text">
</form>
<?php require 'rodape.php'?>