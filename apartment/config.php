<?php
define('CURRENCY', '$');
define('WEB_URL', 'https://ranpc.in/apartment');
define('ROOT_PATH', '/home/ranpc/public_html/apartment');


define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'ranpc_apartment');
define('DB_PASSWORD', ']Dz,uY=.lC^e');
define('DB_DATABASE', 'ranpc_appartment');
$link = mysql_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD) or die(mysql_error());mysql_select_db(DB_DATABASE, $link) or die(mysql_error());?>