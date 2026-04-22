<?php
include('../conf/db_config.php');

$stmt = $conn->prepare("SELECT * FROM utenti WHERE email = ? AND password = ?");  //prepare la query
$stmt->bind_param("ss", $_POST['email'], $_POST['password']); //evita sequel injection (trasforma i caratteri speciali in stringa)
$stmt->execute();

//salvataggio dei dati di una singola riga
$result = $stmt->get_result();
$row = $result->fetch_assoc(); //crea la stessa struttura di POST e GET (array etichettato/dizionario)

//print_r($row);

if(isset($row)){   //se il valore è settato torna true; !isset torna true se il valore non è settato
    session_start();

    $_SESSION['login'] = 'ok';
    $_SESSION['id'] = $row['id'];
    $_SESSION['utente'] = $row['nome'];

    header("Location: ../home.php");

    //echo "<div>benvenuto ".$row['nome']."</div>";
}else{
    header("Location: ../index.php?msg=errlogin");

    //echo "<div>utente non trovato</div>";
}

$stmt->close();
$conn->close();
?>