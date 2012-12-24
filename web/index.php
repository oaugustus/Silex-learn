<?php 
require_once __DIR__."/../vendor/autoload.php";

$app = new Silex\Application();
$app['debug'] = true;

// define o array
$blogPosts = array(
	1 => array(
		'date' => '2011-03-29', 
		'author' => 'Otávio',
		'title' => 'Usando o Silex',
		'body' => '...',
	),
);

// define um controlador para a rota /blog
$app->get('/blog', function() use ($blogPosts){
	$output = '';
	foreach ($blogPosts as $post){
		$output .= sprintf('<h1>%s</h1>', $post['title']);		
	}

	return $output;
});

$app->run();