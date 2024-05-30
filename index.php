<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
</head>
<body>
    <?php
        $welcomeMessage = "Bem-vindo ao meu aplicativo web!";
        echo "<h1>$welcomeMessage</h1>";
        echo "<p>Hoje é " . date('Y-m-d H:i:s') . "</p>";
    ?>
</body>
</html>
