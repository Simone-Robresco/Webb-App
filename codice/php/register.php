<?php
include('../template/header.php');
?>

<form method="POST" action="registercheck.php">

<label for="user">Username</label>
<input type="text" id="user" name="user" placeholder="Scegli un username">

<label for="nome">Nome</label>
<input type="text" id="nome" name="nome" placeholder="Il tuo nome">

<label for="cognome">Cognome</label>
<input type="text" id="cognome" name="cognome" placeholder="Il tuo cognome">

<label for="email">Email</label>
<input type="email" id="email" name="email" placeholder="tua.email@itiscuneo.edu.it">

<label for="password">Password</label>
<input type="password" id="password" name="password" placeholder="Crea una password sicura">

<label for="nome_scuola">Nome Scuola</label>
<input type="text" id="nome_scuola" name="nome_scuola" placeholder="Nome della tua scuola">

<label for="anno_scuola">Anno Scolastico</label>
<input type="text" id="anno_scuola" name="anno_scuola" placeholder="Anno di iscrizione">

<label for="indirizzo">Indirizzo</label>
<input type="text" id="indirizzo" name="indirizzo" placeholder="Via, Città, CAP">

<input type="submit" value="Registrati Ora">

<?php
if(isset($_GET['msg']) and $_GET['msg'] == 'errRegister'){
    echo "<div>Registrazione fallita. Username già esistente!</div>";
}
?>

</form>

<?php
include '../template/footer.php';
?>