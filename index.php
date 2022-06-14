<?php 
// L'e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// Il pagamento avviene con la carta di credito, che non deve essere scaduta.

//CREARE una classe product separata -> non andra in index
//CREARE classi figlie che importano product -> andranno in index

require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Game.php";
require_once __DIR__ . "/Bed.php";
require_once __DIR__ . "/User.php";

$croccantelle = new Food('Cibo','croccantelle', 3, 'carne', 200);
var_dump($croccantelle);
$pupazzo = new Game('gioco', 'pupazzo', 20);
$woodhouse = new Bed('Cuccie', 'cuccia di legno', 50, '5x7');
$alex = new User('Alex Capoluongo', 'alex@gmail.com');
$alex->addItemToCard($pupazzo);
$alex->addItemToCard($woodhouse);
$alex->getTotal();
$alex->getRegistered();
var_dump($alex);
$frank = new User('Frank Poirot', 'ppp@gmail.com');
$frank->addItemToCard($woodhouse);
$frank->addItemToCard($woodhouse);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
</head>
<body>
    <p><?php echo $croccantelle->printInfo() ?></p>
    <p><?php echo $pupazzo->printInfo()?></p>
    <p><?php echo $woodhouse->printInfo()?></p>
    <h3>Nel tuo carrello ci sono: </h3>
    <ul><?php foreach($alex->cart as $item) 
            {
                echo '<li>' . $item->printInfo() . '</li>';
            } 
    ?></ul>
    <p><?php echo "il carrello totale è  di" . " " . $alex->getTotal()?></p>
    <p><?php echo "Essendo registrato al sito, il carrello totale sarà scontato al 20%. <br><b>Totale</b>: " . " " . $alex->getRegistered()?></p>
    <!-- test su frank -->
    <p><?php echo "il carrello totale è  di" . " " . $frank->getRegistered()?></p>

</body>
</html>