<?php
/*
 * This one is actually just a really big converter.
 * It converts the IDs to simple plain names.
 * For me it is not worth to set up a database here, but you could.
 * The only joke is that you should not necessarily recognize what lies behind the names.
 */

function test_md5($content_id)
{
    include 'var.php';
    if ($handle = opendir($storage_base)) {
        while (false !== ($entry = readdir($handle))) {
            if (
                $entry != '.' &&
                $entry != '..' &&
                $entry != '.htaccess' &&
                $entry != '.htpasswd' &&
                $entry != 'loader'
            ) {
                // files to html
                $entry = substr($entry, 0, -4);
                if (md5($entry) == $content_id) {
                    return $entry;
                }
            }
        }
    }
}

?>
