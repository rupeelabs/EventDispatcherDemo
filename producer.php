<?php
require './vendor/autoload.php';

use Symfony\Component\EventDispatcher\EventDispatcher;
use Event\OrderPlacedEvent;
use Symfony\Component\EventDispatcher\Event;

$dispatcher = new EventDispatcher();
$listener = new \Listener\OrderPlacedListener();
$dispatcher->addListener(OrderPlacedEvent::NAME, [$listener, 'doSomething']);
//$dispatcher->addListener(OrderPlacedEvent::NAME, function (Event $event) {
//    echo 'World';exit;
//});

$event = new OrderPlacedEvent();
$result = $dispatcher->dispatch(OrderPlacedEvent::NAME, $event);




