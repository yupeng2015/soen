<?php
return [
    // 类路径
    'class'           => \Soen\Http\Server\Server::class,
    // 构造函数注入
    'params' => [
        // host
        '0.0.0.0',
        // port
        9501,
        // ssl
        false,
    ],
];