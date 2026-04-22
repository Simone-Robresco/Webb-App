<?php
include('../conf/db_config.php');

// Controllo se l'username esiste già
$stmt = $conn->prepare("SELECT * FROM utenti WHERE email = ?");
$stmt->bind_param("s", $_POST['email']);
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc(); 

if(isset($row)){
    // Username già esistente
    header("Location: ./register.php?msg=errRegister");
} else {
    $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $stmt_insert = $conn->prepare("INSERT INTO utenti (username, nome, cognome, email, password, nome_scuola, anno_scuola, indirizzo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt_insert->bind_param("ssssssss", $_POST['user'], $_POST['nome'], $_POST['cognome'], $_POST['email'], $hashed_password, $_POST['nome_scuola'], $_POST['anno_scuola'], $_POST['indirizzo']);
    
    if($stmt_insert->execute()){

        header("Location: ../index.php?msg=registrato");
    } else {

        header("Location: ./register.php?msg=errRegister");
    }
    
    $stmt_insert->close();
}

$stmt->close();
$conn->close();
?>