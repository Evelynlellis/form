<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exibição</title>
</head>
<body>

<?php
echo "<h3 align='center'> Cálculo dos produtos</h3>";
echo "<hr size '3'color='blue'>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['codigo'];
    $descricao = $_POST['descricao'];
    $marca = $_POST['marca'];
    $preco_unit = $_POST['preco_unit'];
    $quantidade = $_POST['quantidade'];

    $total = $preco_unit * $quantidade;

    echo "<h2>Resultado do Formulário</h2>";
    echo "<p><strong>Código:</strong> $codigo</p>";
    echo "<p><strong>Descrição:</strong> $descricao</p>";
    echo "<p><strong>Marca:</strong> $marca</p>";
    echo "<p><strong>Preço Unitário:</strong> R$ $preco_unit</p>";
    echo "<p><strong>Quantidade:</strong> $quantidade</p>";
    echo "<p><strong>Total:</strong> R$ $total</p>";
} else 
?>

</body>
</html>