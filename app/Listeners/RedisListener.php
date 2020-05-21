<?php

namespace App\Listeners;

use Soen\Event\ListenerInterface;
use Soen\Redis\Event\CalledEvent;

/**
 * Class RedisListener
 * @package App\Common\Listeners
 */
class RedisListener implements ListenerInterface
{

    /**
     * 监听的事件
     * @return array
     */
    public function events(): array
    {
        // 要监听的事件数组，可监听多个事件
        return [
            CalledEvent::class,
        ];
    }

    /**
     * 处理事件
     * @param object $event
     */
    public function process(object $event)
    {
        // 事件触发后，会执行该方法
    }

}
