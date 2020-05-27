<?php
return [
    'name'      =>  'httpServer',
    // 类路径
    'class'     => Soen\Http\Server\Server::class,
    // 构造函数注入
    'args'  => [
        // host
        '0.0.0.0',
        // port
        9501,
        // ssl
        false,
    ]
];
