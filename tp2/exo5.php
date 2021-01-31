<?php

if (!empty($_POST)) {
    if($_POST["login"] == "admin" || $_POST["mdp"] == "mdp") {
        echo "Tu es connecté";
    } else {
        echo "Qu'est ce que tu fiches ?";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EX5 - TP2</title>
</head>
<body>

<h2>Identification</h2>

<form action="/" method="post">
<table>
    <tbody>
        <tr>
            <td>Login</td>
            <td><input class="form-control" type="text" id="login" name="animal"></td>
        </tr>
        <tr>
            <td>Mot de passe</td>
            <td><input class="form-control" type="password" id="mdp" name="animal"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="radio" id="enseignant" name="choice"> Enseignant </td>
            <td><input type="radio" id="etudiant" name="choice"> Etudiant </td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Chercher</button></td>
        </tr>
    </tbody>
</table>
</form>

</body>
</html>