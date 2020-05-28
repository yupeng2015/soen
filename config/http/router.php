<?php
return [
	'name'  =>  'router',
    'class' =>  Soen\Router\Provider::class,
	'args'  =>  [
        BASE_PATH . '/routes'
	]
];