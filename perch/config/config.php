<?php

    define('PERCH_LICENSE_KEY', '');

    define("PERCH_DB_USERNAME", '');
    define("PERCH_DB_PASSWORD", '');
    define("PERCH_DB_SERVER", "");
    define("PERCH_DB_DATABASE", "");
    define("PERCH_DB_PREFIX", "perch2_");
    define('PERCH_RWD', true);
    
    define('PERCH_TZ', 'Europe/London');

    define('PERCH_EMAIL_FROM', 'craiglockwood@me.com');
    define('PERCH_EMAIL_FROM_NAME', 'Craig Lockwood');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', dirname(__FILE__)));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
  
?>