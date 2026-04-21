<?php
include('./template/header_riservato.php');
include('./conf/db_config.php');
?>

<section style="text-align: center;">

<?php

$stmt = $conn->prepare("SELECT count(*) as totale_giorni FROM assenze WHERE utente_id = ?");
$stmt->bind_param("s", $_SESSION['id']);
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc(); 

echo "<div>📅 Giorni di Assenza Registrati: <strong>" . $row['totale_giorni'] . "</strong></div>";

?>

</section>

<?php
include './template/footer.php';
?>