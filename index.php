<?php

include 'treatment.php';
include 'library.php';
include 'header.php';

$val1 = "";
$val2 = "";
$sign = "";
$options = ['plus', 'moins', 'fois', 'divise', 'exposant'];

?>
<div class="middle">
<form action="index.php" method="POST">
    <label for="val1">Valeur 1: </label>
    <input type="text" name="val1" id="val1" value="<?php echo $val1 ?>" />
    <label for="sign">Sign: </label>
    <select name="sign" id="sign"> ​
        <?php
        for ($i = 0; $i < count($options); $i++) {
            echo '<option ';
            if ($sign === $options[$i]) {
                echo 'selected';
            }
            echo ">" . $options[$i] . "</option>";
        }
        ?>
    </select>
    <label for="val2">Valeur 2: </label>
    <input type="text" name="val2" id="val2" value="<?php echo $val2 ?>" />
    <input type="submit" value="calcule" />
</form>
    </div>

<?php

include 'footer.php';

$messages = [];


?>