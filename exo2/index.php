<!-- exercice 1 -->
<h1>Exercice 1</h1>
<form action="bonjour.php" method="post">
    <p>
        <label for="nom">Nom : </label>
        <input type="text" name="nom" />
    </p>
    <p>
        <label for="prenom">Prénom : </label>
        <input type="text" name="prenom" />
    </p>
    <p>
        <label for="nickname">Nickname : </label>
        <input type="text" name="nickname" />
    </p>
    <p>
        <input type="submit" value="Valider" />
    </p>
</form>

<!-- exercice 2 -->
<h1>Exercice 2</h1>
<?php
// $myJson = '{"nickname": "BlackOrb", "password": "123456789"}';
$array = json_decode('http://localhost/exoPHP/exo2/userpassword.json', true);
if (empty($_POST['nickname']) || empty($_POST['password'])) {
    echo '<a href="login.php">Il faut renseigner votre nickname et password!</a>';
} else if ($_POST['nickname'] === $array['nickname'] && $_POST['password'] === $array['password']) {
    session_start();// On crée quelques variables de session dans $_SESSION
    $_SESSION['prenom'] = $_POST['prenom']; 
    $_SESSION['nom'] = $_POST['nom']; 
    $_SESSION['nickname'] = $_POST['nickname'];
    $_SESSION['password'] = $_POST['password'];
    echo '<p>Bonjour, '.$_SESSION['prenom'].' '.$_SESSION['nom'].'!</p>';
    echo '<p>Vous pouvez continuer votre session en visitant <a href="page1.php">page 2</a> ou vous pouvez <a href="logout.php">fermer votre session</a></p>';
} else {
    echo '<p>Votre nickname ou password sont invalides!</p>';
    echo '<a href="login.php">Il faut renseigner votre nickname et password!</a>';
}
?>
