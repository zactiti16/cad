<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meus Dados</title>
    <style>
        
    </style>
</head>
<body>
    <?php
        $developer_info = [
            'nome' => 'Seu Nome',
            'versao' => '1.1',
            'ano' => '2024',
            'empresa' => 'Nome da Empresa',
            'email' => 'seuemail@dominio.com'
        ];
    ?>
    <footer>
        <p><?php echo "Desenvolvedor: " . $developer_info['nome']; ?></p>
        <p><?php echo "Versão: " . $developer_info['versao']; ?></p>
        <p><?php echo "Ano: " . $developer_info['ano']; ?></p>
        <p><?php echo "Empresa: " . $developer_info['empresa']; ?></p>
        <p><?php echo "Email: " . $developer_info['email']; ?></p>
    </footer>
</body>
</html>