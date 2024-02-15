<?php 

$dir = getcwd();
    $files = scandir($dir);

    foreach ($files as $file) {
        
        if ($file != "." && $file != "..") {
            // Verifica se é um arquivo (não um diretório)
            if (is_file($dir . '/' . $file)) {
                echo "{" . $file . "}";
                // echo "$file </br>";
            }
        }
    }

?>