<?php

function exposant($val1, $val2)
{
    $resultat = 1;
    for ($i = 0; $i < $val2; $i++) {
        $resultat = resultat * $val1;
    }
    return $resultat;
}

$val1 = "";
$val2 = "";
$sign = "";

$options = ['plus', 'moins', 'fois', 'divise', 'exposant'];


if (!empty($_POST)) {
    include treatment.php;
}
?>

    <form action="index.php" method="POST">
        <label for="val1">Val 1 </label>
        <input type="text" name="val1" id="val1" value="<?php echo $val1 ?>" />
        <label for="sign">Sign </label>
        <select name="sign" id="sign">    ​
            <?php 
            for($i=0; $i<count($options); $i++) {
                echo '<option ';
                if($sign === $options[$i]) {
                    echo 'selected';
                }
                echo ">".$options[$i]."</option>";
            }
            ?>
        </select>

        <label for="val2">Val 2 </label>

        <input type="text" name="val2" id="val2" value="<?php echo $val2 ?>" />

        <input type="submit" value="calcule" />

    </form>