<?php 

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

    case 'exposant':
        $result = exposant(intval($_POST['val1']), intval($_POST['val2']));
        break;

        default:
            $result = 'WTF !?!?';
            break;
    }


    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];

    $sign = $_POST['sign'];
