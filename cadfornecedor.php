<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Fornecedor</title>
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
        input[type="text"], input[type="email"], input[type="number"] {
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
</head>
<body>
    <h1>Cadastro de Fornecedor</h1>
    <form action="processa_fornecedor.php" method="post">
        <label for="CodigoFornecedor">Código Fornecedor:</label>
        <input type="text" id="CodigoFornecedor" name="CodigoFornecedor" required><br>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="cnpj">CNPJ:</label>
        <input type="text" id="cnpj" name="cnpj" required><br>

        <label for="VIUItCompra">Valor da Última Compra:</label>
        <input type="text" id="VIUItCompra" name="VIUItCompra" required><br>

        <label for="contato">Contato:</label>
        <input type="text" id="contato" name="contato" required><br>

        <input type="submit" value="Cadastrar">
    </form>
    <?php include 'MeusDados.php'; ?>
</body>
</html>