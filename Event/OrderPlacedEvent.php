<?php
/**
 * Created by PhpStorm.
 * Date: 2017/8/30
 * Time: 13:52
 */

namespace Event;

use Symfony\Component\EventDispatcher\Event;

class OrderPlacedEvent extends Event
{
    const NAME = 'order.placed';
}