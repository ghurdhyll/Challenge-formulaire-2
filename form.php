<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>
    <p>Completez le formulaire</p>
    <?php 
    if (isset($_GET["errors"])): ?>
        <p>erreur detecté dans le formulaire, veuillez remplir tout les champs correctement</p>
    }
    <?php endif ?>
    <form action="thanks.php" method="post">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="mail">E-mail:</label>
            <input type="email" id="mail" name="mail">
        </div>
        <div>
            <label for="phone_number">Teléphone :</label>
            <input type="phone_number" id="phone_number" name="phone_number">
        </div>
        <div>
            <label for="subject">Subject</label>
            <select name="subject" id="subject_select">
                <option value="">--Please select your subject--</option>
                <option value="plainte">Option A</option>
                <option value="autographe">Option B</option>
                <option value="recrutement">Option C</option>
            </select>
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>

    </form>
</body>

</html>