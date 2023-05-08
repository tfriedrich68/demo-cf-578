<?php
// Verbindung zur Datenbank herstellen
$servername = "localhost";
$username = "deinbenutzername";
$password = "deinpasswort";
$dbname = "deinedatenbank";

$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich hergestellt wurde
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Überprüfen, ob das Formular gesendet wurde und Daten eingetragen wurden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $nachricht = $_POST["nachricht"];

  // SQL-Abfrage zum Einfügen der Daten in die Tabelle "nachrichten"
  $sql = "INSERT INTO nachrichten (name, email, nachricht) VALUES ('$name', '$email', '$nachricht')";

  if ($conn->query($sql) === TRUE) {
      echo "Neuer Eintrag erfolgreich hinzugefügt!";
  } else {
      echo "Fehler: " . $sql . "<br>" . $conn->error;
  }
}

// Verbindung zur Datenbank schließen
$conn->close();
?>
