<?php
require('app/autoloader.php');

Router::get('', 'demo@home');
Router::get('demo', 'demo@hello');
Router::get('demo/(:any)', 'demo@user');
Router::get('posts' ,'blog@posts');

Router::dispatch();