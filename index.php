<?php
session_start();
session_unset();
session_destroy();

include('./codice/template/header.php');
?>

<form method="POST" action="./codice/php/logincheck.php">

  <label for="email">Email </label>
  <input type="text" id="email" name="email" placeholder="Inserisci la tua email istituzionale">

  <label for="password">Password</label>
  <input type="password" id="password" name="password" placeholder="Inserisci la tua password">

  <input type="submit" value="Accedi">

  <a href="./codice/php/register.php"><input type="button" value="Crea Nuovo Account"></a>
<?php
if(isset($_GET['msg'])){
    if($_GET['msg'] == 'errlogin'){
        echo "<div>Credenziali non valide. Riprova!</div>";
    }
    if($_GET['msg'] == 'registrato'){
        echo "<div style='background: linear-gradient(135deg, #d4edda, #c3e6cb); color: #155724; border-left-color: #28a745;'>✅ Registrazione completata! Ora puoi accedere.</div>";
    }
}
?>

</form>



<?php
include './codice/template/footer.php';
?>