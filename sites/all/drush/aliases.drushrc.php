<?php

$aliases['dev'] = array(
	'uri'=> 'example.com',
	'root' => '/home/staging/subdomains/copperkettle/public_html',
	'remote-host'=> 'host.ccistudios.com',
	'remote-user'=> 'staging',
	'path-aliases'=> array(
		'%files'=> 'sites/default/files',
	)
);

$aliases['live'] = array(
	'uri'=> 'copper-kettle-catering.c',
	'root' => '/home/ckc/subdomains/live/public_html',
	'remote-host'=> 'host.ccistudios.com',
	'remote-user'=> 'ckc',
	'path-aliases'=> array(
		'%files'=> 'sites/default/files',
	)
);
