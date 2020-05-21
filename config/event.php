<?php
return [

	// 事件调度器
	[
		// 名称
		'name' => 'event',
		// 构造函数注入
		'listeners' => [
			\App\Common\Listeners\CommandListener::class,
			\App\Common\Listeners\DatabaseListener::class,
			\App\Common\Listeners\RedisListener::class,
			\App\SyncInvoke\Listeners\SyncInvokeListener::class,
		],
	],

];
