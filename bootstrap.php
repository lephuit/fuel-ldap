<?php

Autoloader::add_namesapce('Ldap',__DIR__.'/classes/');
Autoloader::add_core_namespace('Ldap');
Autoloader::add_classes(array(
	'Ldap\\Ldap' => __DIR__.'/classes/ldap.php',
	'Ldap\\Auth' => __DIR__.'/classes/auth_ldap.php'
));