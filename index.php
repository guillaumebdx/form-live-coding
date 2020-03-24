<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire PHP</title>
</head>
<body>
<?php

$titleError     = '';
$typeError      = '';
$toolError      = '';
$nbError        = 0;
$successMessage = '';
$title          = '';
$type           = '';



?>

<form action="controller.php" method="post">
    <div>
        <label for="title">Titre de la recette</label>
        <input type="text" name="title" id="title" value="<?= $title ?>">
        <?= $titleError ?>
    </div>
    <div>
        <label for="starter">Entrée</label>
        <input <?php if ($type === 'starter') : ?> checked <?php endif; ?> type="radio" name="type" value="starter" id="starter">
        <label for="maincourse">Plat</label>
        <input <?php if ($type === 'maincourse') : ?> checked <?php endif; ?> type="radio" name="type" value="maincourse" id="maincourse">
        <label for="dessert">Dessert</label>
        <input <?= $type === 'dessert' ? 'checked' : '' ?>  type="radio" name="type" value="dessert" id="dessert">
        <?= $typeError ?>
    </div>

    <div>
        <select name="tool" id="tool">
            <option value="">Sélectionnez un ustensile</option>
            <option value="spoon">Cuillère</option>
            <option value="fork">Fourchette</option>
            <option value="knife">Couteau</option>
            <option value="whisk">Fouet</option>
        </select>
        <?= $toolError ?>
    </div>
    <button type="submit">
        Sauvegarder ma recette
    </button>
</form>
<?= $successMessage ?>
</body>
</html>


