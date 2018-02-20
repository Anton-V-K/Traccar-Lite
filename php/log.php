<?php

if ( !defined('ABSPATH') )
define( 'ABSPATH', dirname(__FILE__) . '/' );
require_once( ABSPATH . 'config.php' );

function _LOG($log_msg)
{
    if (FLOG::SUBDIR != '' && !file_exists(FLOG::SUBDIR))
    {
        // create directory/folder uploads.
        mkdir(FLOG::SUBDIR, 0777, true);
    }
    $log_filename = FLOG::SUBDIR . FLOG::FILEPRE . date(FLOG::FILESTAMP) . FLOG::FILEEXT;
    file_put_contents($log_filename, date(FLOG::MSGSTAMP) . ' ' . $_SERVER['REMOTE_ADDR'] . ': ' . $log_msg . PHP_EOL, FILE_APPEND);
}

?>
