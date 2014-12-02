<?php
require_once 'vendor/autoload.php';
echo 'tst';

$capsule = new Paperstreetmedia\Core\Database\Capsule(new Illuminate\Database\Capsule\Manager);
#$capsule->setConnection('localhost', 'laraveltubetour', 'laraveltubetour', '6ZHo1eCBv32jVAp', PDO::FETCH_CLASS);
$capsule->setConnection('localhost', 'bffsma', 'root', 'secret', PDO::FETCH_CLASS, '33060', 'default');

$con = new Paperstreetmedia\Repositories\AbTestRepository(new Paperstreetmedia\DataAccessObject\AbTestLaravelMysqlObject(new Illuminate\Support\Collection));
var_dump($con->readAll());
var_dump($con->update(
	array(
		'position' => 'bottom', 
		'text' => 'hello', 
		'color' => 'red1',
		'id' => 3
		
		)
	));