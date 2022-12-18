<?php 
session_start();
?>
<h2>Please enter votre nom et prenom pour quitter votre session</h2>
<form action="index.php" method="post">
    <p>
        <label for="nom">Nom : </label>
        <input type="text" name="nom" />
    </p>
    <p>
        <label for="prenom">Prénom : </label>
        <input type="text" name="prenom" />
    </p>
    <p>
        <input type="submit" value="Valider" />
    </p>
</form>
<?php
if (!empty($_POST['prenom']) && !empty($_POST['nom'])) {
    if ($_POST['nom'] === $_SESSION['nom'] && $_POST['prenom'] === $_SESSION['prenom']) {
        session_destroy();
        echo '<strong>' . $_POST['prenom'] . ' ' . $_POST['nom'] . '</strong>' . '</br>';
        echo 'Votre session est fini!';
    }
} else {
    echo '<p>Saisir votre nom et prenom!</p>';
}
?>