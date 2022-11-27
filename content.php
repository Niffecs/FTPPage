<?php
echo("\n\n<!-- Generate Source Code on server -->\n\n");

include "var.php";
include "db.php";

// Print all files 
if ($handle = opendir($storage_dir)) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != ".." && $entry != ".htaccess"  && $entry != ".htpasswd") {
            // files to html
            $entry = substr($entry,0,-4);
            echo("<a href='https://ftp.niffecs.com/handler.php?db_key=".$entry."'>");
            echo("<div class='file' id='".$entry."'>".test_md5($entry)."</div>");
            echo("</a><br><br>");
        }
    }

    closedir($handle);
}   

?>
