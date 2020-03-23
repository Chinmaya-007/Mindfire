<?php
    define('FM_HOST', '172.16.9.184');
    define('FM_FILE', 'studentDetails.fmp12');
    define('FM_USER', 'admin');
    define('FM_PASS', '20410Samaya');

    # this is the include for the API for PHP
    //require_once ('../lib/FileMaker.php');
# instantiate a new FileMaker object
    $fm = new FileMaker(FM_FILE, FM_HOST, FM_USER, FM_PASS);
    // if (FileMaker::isError($fm)) {
    //     if ($fm->code = 401) {
    //     $findError = 'There are no Records that match that request: '. ' (' .
    //     $fm->code . ')';
    //     } else {
    //     $findError = 'Find Error: '. $fm->getMessage(). ' (' . $fm->code
    //     . ')';
    //     }
    //     }

