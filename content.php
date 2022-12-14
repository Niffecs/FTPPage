<?php
echo "\n\n<!-- Generate Source Code on server -->\n\n";

include 'var.php';
include 'db.php';

// Create Layer
$content_layer = array();

// Print all files
$verzeichnis = $storage_base;

if ( is_dir ( $verzeichnis ))
{
    // öffnen des Verzeichnisses
    if ( $xyz = opendir($verzeichnis) )
    {
        // einlesen der Verzeichnisses
        while (($file = readdir($xyz)) !== false)
        {
            // Keine System Daten
            if($file != ".htaccess" && 
            $file != ".." && 
            $file != "." && 
            $file != "loader" &&
            $file != ".htpasswd"
            ){
                array_push($content_layer,$file);
            }
            
        }
        closedir($handle);
    }
}

// sortieren
sort($content_layer);

// Ausgabe
for($x = 0; $x < count($content_layer); $x++) {
    echo "<a href='https://ftp.niffecs.com/handler.php?db_key=" . md5(substr($content_layer[$x], 0, -4)). "'>";
    echo "<div class='file' id='" .$content_layer[$x]."'>" .str_replace('_', ' ', substr($content_layer[$x], 0, -4)) . '</div>';
    echo '</a><br><br>';
}

?>
