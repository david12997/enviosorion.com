<?php

echo '<script src="screen.js"></script>';

function router($url, $closure) {

	$route = $_SERVER['REQUEST_URI'];

	if (strpos($route, '?')) 
    {
		$route = strstr($route, '?', true);
	}

	$urlRule = preg_replace('/:([^\/]+)/', '(?<\1>[^/]+)', $url);
	$urlRule = str_replace('/', '\/', $urlRule);

	preg_match_all('/:([^\/]+)/', $url, $parameterNames);


	if (preg_match('/^' . $urlRule . '\/*$/s', $route, $matches)) 
    {

		$parameters = array_intersect_key($matches, array_flip($parameterNames[1]));
		call_user_func_array($closure, $parameters);
	}
}


router('/web', function () {

	require_once 'views/desktop.html';
});

router('/mobile', function () {

	require_once 'views/mobile.html';
});
