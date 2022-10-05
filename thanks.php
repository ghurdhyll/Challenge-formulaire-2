<?php

$name = $email = $subjects = $phone = $message = "";

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // nettoyage et validation des données soumises via le formulaire 
  if (!isset($_POST['name']) || trim($_POST['name']) === '')
    $errors[] = "Le nom est obligatoire";
  if (!isset($_POST['mail']) || trim($_POST['mail']) === '' || !filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL))
    $errors[] = "L'adresse mail est obligatoire";
  if (!isset($_POST['phone_number']) || trim($_POST['phone_number']) === '')
    $errors[] = "Le numéro de téléphone est obligatoire";
    if (!isset($_POST['phone_number']) || trim($_POST['phone_number']) === '')
    $errors[] = "Le numéro de téléphone est obligatoire";

  if (!empty($errors)) {
    // traitement du formulaire
    // puis redirection
    header('Location: form.php?errors');
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = input_controller($_POST["name"]);
  $email = input_controller($_POST["mail"]);
  $subjects = input_controller($_POST["subject"]);
  $phone = input_controller($_POST["phone_number"]);
  $message = input_controller($_POST["message"]);
}

function input_controller($inserted_input)
{
  $inserted_input = trim($inserted_input);
  $inserted_input = stripslashes($inserted_input);
  $inserted_input = htmlspecialchars($inserted_input);
  return $inserted_input;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>thanks</title>
</head>

<body>

  <div>
    <p>Merci <?= $_POST['name'] ?> de nous avoir contacté à propos de <?= $_POST['subject'] ?>.
      Un de nos conseiller vous contacteras pour votre demande soit à l’adresse <?= $_POST['mail'] ?>
      ou par téléphone au <?= $_POST['phone_number'] ?> dans les plus brefs délais pour traiter votre demande :
      <?= $_POST['message'] ?></p>
  </div>
</body>

</html>