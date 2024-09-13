<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estou utilizando style dentro das li, mas utilizando somente uma classe no css é uma abordagem mais inteligente, inclusive aqui só estou fazendo pois é um desafio */
        .nota {
            width: 15%;
            margin-top: 0.5rem;
        }
    </style>
</head>

<body>
    <?php
    $saque = $_GET['saque'] ?? 0;

    $resto = $saque;

    // if ($resto >= 100) {
    //     $cem = floor($resto / 100);
    //     $resto = $resto % 100;
    // } else {
    //     $cem = 0;
    // }

    $cem = (int) ($resto / 100);
    // $resto = $resto % 100;
    $resto %= 100;

    // if ($resto >= 50) {
    //     $cinquenta = floor($resto / 50);
    //     $resto = $resto % (50 * $cinquenta);
    // } else {
    //     $cinquenta = 0;
    // }

    $cinquenta = (int) ($resto / 50);
    $resto = $resto % 50;
    $resto %= 50;

    // if ($resto >= 20) {
    //     $vinte = floor($resto / 20);
    //     $resto = $resto % (20 * $vinte);
    // } else {
    //     $vinte = 0;
    // }

    $vinte = (int) ($resto / 20);
    $resto = $resto % 20;
    $resto %= 20;

    // if ($resto >= 10) {
    //     $dez = floor($resto / 10);
    //     $resto = $resto % (10 * $dez);
    // } else {
    //     $dez = 0;
    // }

    $dez = (int) ($resto / 10);
    // $resto = $resto % 10;
    $resto %= 10;

    // if ($resto >= 5) {
    //     $cinco = floor($resto / 5);
    //     $resto = $resto % (5 * $cinco);
    // } else {
    //     $cinco = 0;
    // }

    $cinco = (int) ($resto / 5);
    // $resto = $resto % 5;
    $resto %= 5;

    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="saque" id="saque" step="5" min="0" value="<?= $saque ?>">
            <p style="font-size:0.6em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$20, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?= "<h2>Saque de R$" . number_format($saque, 2, ',', '.') . " realizado</h2>" ?>
        <p>O caixa eletrônico vai te entregar as notas</p>

        <?=
        "<ul>
            <li ><img class=\"nota\" src=\"https://ambientes.ambientebrasil.com.br/wp-content/uploads/2020/09/c%C3%A9dula-100-reais_anverso.jpg\" alt=\"100 reais\"> x$cem</li>
            <li><img style=\"width:15%;margin-top:0.5rem;\" src=\"https://ambientes.ambientebrasil.com.br/wp-content/uploads/2020/09/c%C3%A9dula-50-reais_anverso.jpg\" alt=\"50 reais\"> x$cinquenta</li>
            <li><img style=\"width:15%;margin-top:0.5rem;\" src=\"https://ambientes.ambientebrasil.com.br/wp-content/uploads/2020/09/c%C3%A9dula-20-reais_anverso.jpg\" alt=\"20 reais\"> x$vinte</li>
            <li><img style=\"width:15%;margin-top:0.5rem;\" src=\"https://ambientes.ambientebrasil.com.br/wp-content/uploads/2020/09/c%C3%A9dula-10-reais_anverso-1.jpg\" alt=\"10 reais\"> x$dez</li>
            <li><img style=\"width:15%;margin-top:0.5rem;\" src=\"https://ambientes.ambientebrasil.com.br/wp-content/uploads/2020/09/c%C3%A9dula-5-reais_anverso-1.jpg\" alt=\"5 reais\"> x$cinco</li>
         </ul>"
        ?>
    </section>
</body>

</html>