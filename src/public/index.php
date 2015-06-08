<?php
/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 6/8/15
 * Time: 11:38 AM
 */


phpinfo();

$pdo = new \PDO(
	'mysql:host=db;dbname=demoName',
	'demoUser',
	'demoPass'
);