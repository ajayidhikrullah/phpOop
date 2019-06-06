<?php
//$_SERVER superglobal




// Create server array
$server = [
	// 'Host Server Name' => $_SERVER['SERVER_NAME'],
	'Host Header' => $_SERVER['HTTP_HOST'] . '<br>',
	'Server Software' => $_SERVER['SERVER_SOFTWARE']. '<br>',
	'Document Root' => $_SERVER['DOCUMENT_ROOT']. '<br>',
	'Scrit Name' => $_SERVER['SCRIPT_NAME']. '<br>',
	'Absolute Part' => $_SERVER['SCRIPT_FILENAME'],
];
// echo $server['Host Server Name']; //this print localhost
// echo $server['Host Header']. '<br>';//this print localhost:8000
// echo $server['Server Software']; //PHP 7.2.8 Development Server
// echo $server['Document Root'];
// print_r($server);
echo '<h1>--------------------------------------</h1>';

//create client array
$client = [
	'Client System  Info' => $_SERVER['HTTP_USER_AGENT']. '<br>',
	'Client IP' => $_SERVER['REMOTE_ADDR']. '<br>',
	'Remote Port' => $_SERVER['REMOTE_PORT']

];

// echo $client['Client IP'];
// print_r($client);
?>