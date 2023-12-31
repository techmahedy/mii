<?php

use App\Core\Log as Reader;
use App\Core\Request;
use App\Core\Session;
use App\Core\Redirect;
use App\Core\Controllers\Controller;

/**
 * view.
 *
 * @author	Mahedi Hasan
 * @global
 * @param	mixed	$view	
 * @param	array	$data	Default: []
 * @return	mixed
 */
function view($view, $data = []): mixed
{
    return (new Controller())->render($view, $data);
}

/**
 * redirect.
 *
 * @author	Mahedi Hasan
 * @global
 * @return	Redirect
 */
function redirect(): Redirect
{
    return  new Redirect();
}


/**
 * request.
 *
 * @author	Mahedi Hasan
 * @global
 * @return	Request
 */
function request(): Request
{
    return new Request();
}

/**
 * session.
 *
 * @global
 * @return	Session
 */
function session(): Session
{
    return new Session();
}

/**
 * logger.
 *
 * @global
 * @return	\Monolog\Logger
 */
function logger(): \Monolog\Logger
{
    return (new Reader())->logReader();
}

/**
 * fake.
 *
 * @global
 * @return	mixed
 */
function fake(): \Faker\Generator
{
    $faker = Faker\Factory::create();

    return $faker;
}
