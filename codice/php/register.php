<?php
include('../template/header.php');
?>

<link rel="stylesheet" href="../css/style.css">

<form method="POST" action="registercheck.php">

<label for="nome">👤 Nome</label>
<input type="text" id="nome" name="nome" placeholder="Il tuo nome">

<label for="cognome">👥 Cognome</label>
<input type="text" id="cognome" name="cognome" placeholder="Il tuo cognome">

<label for="user">🆔 Username</label>
<input type="text" id="user" name="user" placeholder="Scegli un username">

<label for="password">🔒 Password</label>
<input type="password" id="psw" name="password" placeholder="Crea una password sicura">

<label for="email">📧 Email</label>
<input type="email" id="email" name="email" placeholder="tua.email@esempio.com">

<label for="codFiscale">🆔 Codice Fiscale</label>
<input type="text" id="codFiscale" name="codFiscale" placeholder="RSSMRA85M01H501Z">

<label for="indirizzo">🏠 Indirizzo</label>
<input type="text" id="indirizzo" name="indirizzo" placeholder="Via, Città, CAP">

<input type="submit" value="Registrati Ora">

<?php
if(isset($_GET['msg']) and $_GET['msg'] == 'errRegister'){
    echo "<div>⚠️ Registrazione fallita. Username già esistente!</div>";
}
?>

</form>

<?php
include '../template/footer.php';
?>