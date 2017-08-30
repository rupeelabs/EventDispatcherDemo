<?php
/**
 * Created by PhpStorm.
 * Date: 2017/8/30
 * Time: 14:07
 */

namespace Listener;



use Symfony\Component\EventDispatcher\Event;

class OrderPlacedListener
{
    public function doSomething(Event $event)
    {
        echo 'Hello';
    }
}