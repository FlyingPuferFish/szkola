<form method="post">
    <?php for ($i = 0; $i < 10; $i++) { ?>
        <input type="text" name="litery[]" size="1">
    <?php } ?>
    <input type="submit" value="OK">
</form>

<form method="post">
    <input type="text" name="wyraz">
    <input type="submit" value="OK">
</form>

<?php
$tab = array();

// Zadanie 3.1
if (isset($_POST['litery'])) {
    $tab = $_POST['litery'];
}

// Zadanie 3.2
if (isset($_POST['wyraz'])) {
    $tab = str_split($_POST['wyraz']);
}

if (count($tab) > 0) {
    print_r($tab);
    echo "<br>";

    // Zadanie 3.3
    for ($i = 0; $i < count($tab); $i++) {
        if ($tab[$i] == strtoupper($tab[$i])) {
            $tab[$i] = strtolower($tab[$i]);
        } else {
            $tab[$i] = strtoupper($tab[$i]);
        }
    }
    print_r($tab);
    echo "<br>";

    // Zadanie 3.4
    shuffle($tab);
    print_r($tab);
}
?>
