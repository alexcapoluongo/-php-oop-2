<?php 
// L'e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti. :carello_della_spesa:
// Il pagamento avviene con la carta di credito, che non deve essere scaduta.

//CREARE una classe product separata -> non andra in index
//CREARE classi figlie che importano product -> andranno in index

require_once __DIR__ . "/Food.php";

$croccantelle = new Food('Cibo','croccantelle', 3);

var_dump($croccantelle);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $croccantelle->printInfo() ?></p>
</body>
</html>