<?php require 'prova.php'?>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Inizio</title>
</head>
<body>
    <?php include 'header.html'?>
    <h1>Form Esempio</h1>

    <form method="post" action="prova.php">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Inserisci Nome">
        <label for="cognome">Cognome</label>
        <input type="text" id="cognome" name="cognome" placeholder="Inserisci Cognome">
        <input type="submit" value="Invia dati">
    </form>
    <?php $numero_acaso = 21?>
    <?php if($numero_acaso >= 5 && $numero_acaso <= 10):?>
    <h3>Il numero a caso è compreso tra 5 e 10</h3>
    <?php elseif($numero_acaso < 20):?>
    <h3>Il numero a caso è minore di 20</h3>
    <?php else:?>
    <h3>Il numero a caso non è compreso tra 5 e 10 ed è maggiore di 20</h3>
    <?php endif;?>

    <ul>
        <?php for ($i=0; $i < 5; $i++) :?>
            <li>Numero contatore : <?php echo $i ?></li>
            <?php endfor; ?>
    </ul>

    <form method="get" action="prova.php">
        <h2>COMPILA IL MODULO</h2>
        <label for="marca">Marca Auto</label>
        <input type="text" name="marca" id="marca">
        <label for="modello">Modello Auto</label>
        <input type="text" name="modello" id="modello">
        <input type="submit" value="Invia modulo">
    </form>

    <form action="prova.php" method="post" enctype="multipart/form-data">
        <h2>Carica File</h2>
        <label for="fileSelect">File</label>
        <input type="file" name="file" id="fileSelect">
        <input type="submit" value="Carica">
        <p><strong>Nota</strong>Sono accettati solo i formati .jpg , .jpeg , .gif , .png con una size massima di 5mb
    </form>

    <script>
        let formData = new FormData();
        formData.append('data','pokedex');

        fetch('prova.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => console.log(data));
    </script>
    
    <?php //funzione_esterna(); ?>


</body>
</html>