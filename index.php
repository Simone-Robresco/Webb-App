<?php
session_start();
session_unset();
session_destroy();

include('./template/header.php');
?>

<form method="POST" action="./php/logincheck.php">

  <label for="utente">👤 Nome Utente</label>
  <input type="text" id="utente" name="utente" placeholder="Inserisci il tuo username">

  <label for="password">🔒 Password</label>
  <input type="password" id="password" name="password" placeholder="Inserisci la tua password">

  <input type="submit" value="Accedi">

  <a href="./php/register.php"><input type="button" value="Crea Nuovo Account"></a>
<?php
if(isset($_GET['msg'])){
    if($_GET['msg'] == 'errlogin'){
        echo "<div>⚠️ Credenziali non valide. Riprova!</div>";
    }
    if($_GET['msg'] == 'registrato'){
        echo "<div style='background: linear-gradient(135deg, #d4edda, #c3e6cb); color: #155724; border-left-color: #28a745;'>✅ Registrazione completata! Ora puoi accedere.</div>";
    }
}
?>

</form>



<?php
include './template/footer.php';
?>