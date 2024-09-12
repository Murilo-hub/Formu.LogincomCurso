<?php
    $nome = $_POST['usuario'];
    $senha = $_POST['senha'];
    $curso = $_POST['curso'];
    $periodo = $_POST['select'];


    print "<h1>Dados recebidos:</h1>";
    print "<p><strong>Nome:</strong> " . $nome . "</p>";
    print "<p><strong>Senha:</strong> " . $senha . "</p>";
    print "<p><strong>Curso:</strong> " . $curso . "</p>";
    print "<p><strong>Período:</strong> " . $periodo . "</p>";

?>
