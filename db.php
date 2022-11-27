<?php
/*
 * This one is actually just a really big converter. 
 * It converts the IDs to simple plain names. 
 * For me it is not worth to set up a database here, but you could. 
 * The only joke is that you should not necessarily recognize what lies behind the names.
 */

include "var.php";

function md6($md5_ext)
{
    // Ach was weiß denn ich 
    return md5(md5($md5_ext));
}

function reverse_md5($content_id)
{
    $dummy = "dummy";

    // Proseminar
    if ($content_id == md5("Proseminar")) {
        $dummy = "Proseminar";

    }

    // Seminarfach 
    if ($content_id == md5("Seminarfach")) {
        $dummy = "Seminarfach";
    }

    // Utopie_und_Dystopie.pdf
    if ($content_id == md5("Utopie_und_Dystopie")) {
        $dummy = "Utopie_und_Dystopie";
    }

    // Error
    if ($dummy == "dummy") {
        $dummy = "Error";
    }

    return $dummy;
}


function test_md5($content_id){
    include "var.php";
    if ($handle = opendir($storage_base)) {

        while (false !== ($entry = readdir($handle))) {
    
            if ($entry != "." && $entry != ".." && $entry != ".htaccess"  && $entry != ".htpasswd" && $entry != "loader") {
                // files to html
                $entry = substr($entry,0,-4);
                if (md5($entry) == $content_id){
                    return $entry;
                }
            }
            }
        }
}





?>