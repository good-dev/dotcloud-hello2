<?php
echo '<h1>Hello2</h1>';
$envjson = json_decode(file_get_contents("/home/dotcloud/environment.json"),true);
$mysqli = new mysqli($envjson['DOTCLOUD_DB_MYSQL_HOST'],
		    'softtoys',
		    '300583',
		    'hello2',
		    $envjson['DOTCLOUD_DB_MYSQL_PORT']);
echo '<p>';
print_r($mysqli->query('SELECT NOW()')->fetch_row());
echo '</p>';
?>