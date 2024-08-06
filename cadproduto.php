<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>
    <style>
          body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        footer {
            margin-top: 20px;
            padding: 10px;
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
    <script>
        function calcularTotal() {
            var estoque = document.getElementById('Estoque').value;
            var preco = document.getElementById('Preco').value;
            var total = estoque * preco;
            document.getElementById('total').innerText = "Total: R$ " + total.toFixed(2);
        }
    </script>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form action="processa_produto.php" method="post">
        <label for="CodigoProduto">Código Produto:</label>
        <input type="text" id="CodigoProduto" name="CodigoProduto" required><br>

        <label for="Descricao">Descrição:</label>
        <input type="text" id="Descricao" name="Descricao" required><br>

        <label for="Estoque">Estoque:</label>
        <input type="number" id="Estoque" name="Estoque" oninput="calcularTotal()" required><br>

        <label for="Preco">Preço:</label>
        <input type="number" id="Preco" name="Preco" step="0.01" oninput="calcularTotal()" required><br>

        <p id="total">Total: R$ 0.00</p>

        <input type="submit" value="Cadastrar">
    </form>
    <?php include 'MeusDados.php'; ?>
</body>
</html>