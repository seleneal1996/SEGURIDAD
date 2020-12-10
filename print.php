<?php
        if ($_POST['hashtype'] == '-All-')  {
                $ha = hash_algos();
        } else {
                $ha[] = $_POST['hashtype']."\n";
        }

        if ($_POST['hashfield']) {
                
                foreach($ha as $k) {
                        echo $k . " : " . hash($k,$_POST['hashfield'])."\n";
                }
        }

        if ($_FILES['hashfile']['tmp_name']) {
        echo "Nombre del Alchivo: " . $_FILES['hashfile']['name'] . "\n";
        foreach($ha as $k) {
                echo $k. hash_file($k,$_FILES['hashfile']['tmp_name']);
                echo "\n";
        }
}

?>  
