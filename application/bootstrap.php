<?php
// Где лежат шаблоны
$loader = new Twig_Loader_Filesystem(__DIR__ . '/views');


// Где будут хранится файлы кэша (php файлы)
$twig = new Twig_Environment($loader, array( 'debug' => true, 'cache' => __DIR__ . '/tmp/cache',
'auto_reload' => true,
));


// Добовляем возможность dump в twig'e (dump в twig'e аналог var_dump в php)
$twig->addExtension(new Twig_Extension_Debug());


// Модули якобы ядра :-)
require_once __DIR__ . '/core/db.php';
require_once __DIR__ . '/core/router.php';


// Здесь этого не должно быть пути к контроллерам и моделям должен инклюдить Router
// Но моя лень мне не дала этого сделать :-)
// Понять простить :-)
require_once __DIR__ . '/controllers/task.php';
require_once __DIR__ . '/models/task.php';


// Конфиг для MySQL
$config = include 'config.php';
$db = DataBase::connect(
	$config['mysql']['host'],
	$config['mysql']['dbname'],
	$config['mysql']['user'],
	$config['mysql']['pass']
);
Router::start($db, $twig);