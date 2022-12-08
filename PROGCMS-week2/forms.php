

<!DOCTYPE html>
<html>
<head>
<title>php formulier</title>
</head>

<body>
    <form action="" method="post">
    <p>
        <label for="voornaam">Voornaam:</label>
        <input type="text" name="voornaam" id="voornaam" />
    </p>
    <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" />
    </p>
    <p>
        <label for="text">text:</label>
        <input type="text" name="text" id="text" />
    </p>
    <p>
        <input type="submit" value="submit" />
    </p>
    </form>
</body>

</html>

<?php


print_r($_POST);

if (isset($_POST['submit'])) {
    echo 'niet leeg';

    $user = $_POST['voornaam'];
    $user__validate = trim($user) . stripcslashes($user) . htmlspecialchars($user);
    
    $email = $_POST['email'];
    $email__validate = trim($email) . stripcslashes($email) . htmlspecialchars($email);

    $text = $_POST['text'];
    $text__validate = trim($text) . stripcslashes($text) . htmlspecialchars($text);

}
else{
    echo "je hebt niet alles ingevuld";
}
?>
