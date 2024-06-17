<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="../Public/css/style_1.css">
    <style>
        
    </style>
</head>
<body>

<?php include_once __DIR__ . '/header.php'; ?>

<h2>User Registration</h2>

<?php

require_once __DIR__ . '/../../Service/Database.php';

use App\Service\Database;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Datenbankverbindung herstellen
    $database = new Database();
    $pdo = $database->getPDO();

    // Benutzereingaben erfassen
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $carId = $_POST['car_id'];

    // Benutzer registrieren
    $sql = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':email', $email);

    try {
        $stmt->execute();
        $userId = $pdo->lastInsertId();

        // Auto mieten (user_id zur Tabelle cars hinzufügen)
        $sql = "UPDATE cars SET user_id = :user_id WHERE id = :car_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':car_id', $carId);

        try {
            $stmt->execute();
            echo "Benutzer erfolgreich registriert und Auto erfolgreich gemietet!";
            header("Location: index.php?controller=home"); // Nach erfolgreicher Registrierung und Mieten zur Startseite weiterleiten
            exit;
        } catch (PDOException $e) {
            echo "Fehler beim Mieten des Autos: " . $e->getMessage();
        }
    } catch (PDOException $e) {
        echo "Fehler beim Registrieren des Benutzers: " . $e->getMessage();
    }
}

?>

<form action="" method="post" onsubmit="return validateForm()">
    <input type="hidden" name="car_id" value="<?php echo htmlspecialchars($_GET['car_id']); ?>">
    <label for="username">Benutzername:</label>
    <input type="text" id="username" name="username" required>
    
    <label for="password">Passwort:</label>
    <input type="password" id="password" name="password" required>
    
    <label for="email">E-Mail:</label>
    <input type="email" id="email" name="email" required>
    
    <input type="submit" value="Registrieren">
</form>

<script>
    function validateForm() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var email = document.getElementById("email").value;

        if (username === "" || password === "" || email === "") {
            alert("Bitte füllen Sie alle Felder aus.");
            return false;
        }

        if (!isValidEmail(email)) {
            alert("Bitte geben Sie eine gültige E-Mail-Adresse ein.");
            return false;
        }

        return true;
    }

    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }
</script>

<?php include_once __DIR__ . '/footer.php'; ?>

</body>
</html>
