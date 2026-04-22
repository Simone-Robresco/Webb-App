<?php
include('./template/header_riservato.php');
include('./conf/db_config.php');
?>

<section style="text-align: center;">

<?php
$result = $conn->query("SELECT * FROM prodotti WHERE status = 1");

while($prodotto = $result->fetch_assoc()) {
?>
    <div style="width: 22%; border: 1px solid #ccc; border-radius: 10px; padding: 10px; text-align: center;">
        <h3><?php echo $prodotto['descrizione']; ?></h3>
        
        <p>Prezzo: <?php echo $prodotto['prezzo']; ?>€</p>
        
        <p>Pubblicato il: <?php echo $prodotto['data_pubblicazione']; ?></p>
        
        <a href="./php/dettaglio_prodotto.php?id=<?php echo $prodotto['id_prodotto']; ?>">
            <button>Vedi prodotto</button>
        </a>
    </div>
<?php
}
?>
</section>

<?php
include './template/footer.php';
?>