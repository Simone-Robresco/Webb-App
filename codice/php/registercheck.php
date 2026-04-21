<?php
include('../conf/db_config.php');

// Controllo se l'username esiste già
$stmt = $conn->prepare("SELECT * FROM utenti WHERE user = ?");
$stmt->bind_param("s", $_POST['user']);
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc(); 

if(isset($row)){
    // Username già esistente
    header("Location: ./register.php?msg=errRegister");
} else {
    $stmt_insert = $conn->prepare("INSERT INTO utenti (nome, cognome, psw, user, email, codicefiscale, indirizzo) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt_insert->bind_param("sssssss", $_POST['nome'], $_POST['cognome'], $_POST['password'], $_POST['user'], $_POST['email'], $_POST['codFiscale'], $_POST['indirizzo']);
    
    if($stmt_insert->execute()){
        // Registrazione riuscita, torno al login
        header("Location: ../index.php?msg=registrato");
    } else {
        // Errore nell'inserimento
        header("Location: ./register.php?msg=errRegister");
    }
    
    $stmt_insert->close();
}

$stmt->close();
$conn->close();
?>