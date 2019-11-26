<?php

if (!empty($_POST)) {

    /*

    echo $_POST['val1'].' '.$_POST['sign'].' '.$_POST['val2']. ' = ';

    .(intval($_POST['val1']) + intval($_POST['val2']));

​

    if ($_POST['sign'] ==='plus') {

        echo (intval($_POST['val1']) + intval($_POST['val2']));

    } 

        elseif ($_POST['sign'] ==='moins') {

            echo (intval($_POST['val1']) - intval($_POST['val2']));  

    }

        elseif ($_POST['sign'] ==='fois') {

            echo (intval($_POST['val1']) * intval($_POST['val2']));  

        }

        elseif ($_POST['sign'] ==='divise') {

            echo (intval($_POST['val1']) / intval($_POST['val2']));  

    }

        elseif ($_POST['sign'] ==='exposant') {

        //boucle

        $val1 = intval($_POST['val1']) ;

        $val2 = intval($_POST['val2']) ;

        $result = 1 ;

        for($i = 0; $i<$val2; $i++) {

            $result = $result * $val1;

​

        }

        echo $result ;

​

    }

    

        else {

            echo 'WTF !?!?!';

        }*/

    $result = 0;

    switch ($_POST['sign']) {

        case 'plus':
            $result = intval($_POST['val1']) + intval($_POST['val2']);
            break;

        case 'moins':
            $result = intval($_POST['val1']) - intval($_POST['val2']);
            break;

        case 'fois':
            $result = intval($_POST['val1']) * intval($_POST['val2']);
            break;

        case 'divise':
            $result = intval($_POST['val1']) / intval($_POST['val2']);
            break;

        default:
            $result = 'WTF !?!?';
            break;
    }
}

echo $_POST['val1'] . ' ' . $_POST['sign'] . ' ' . $_POST['val2'] . ' = ' . $result;

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

if (!empty($_POST['val1'])) {
    $val1 = $_POST['val1'];
}

if (!empty($_POST['val2'])) {
    $val1 = $_POST['val2'];
}

?>

    <form action="index.php" method="POST">

        <label for="val1">Val 1 </label>

        <input type="text" name="val1" id="val1" value="<?php echo $val1 ?>" />

        <label for="sign">Sign </label>

        <select name="sign" id="sign">    ​
            <?php 
            for($i=0; $i<count($options); $i++) {
                echo '<option';
                if($sign === $options[$i]) {
                    echo 'selected';
                }
                echo ">".$options[$i]."</options>";
            }
            ?>
        </select>

        <label for="val2">Val 2 </label>

        <input type="text" name="val2" id="val2" value="<?php echo $val2 ?>" />

        <input type="submit" value="calcule" />

    </form>