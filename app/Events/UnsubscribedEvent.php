<?php

namespace Paragraf\ViberBot\Event;

use Paragraf\ViberBot\Model\ViberUser;
use Paragraf\ViberBot\Intefaces\EventInterface;

class SubscribedEvent extends Event implements EventInterface
{
    public $event = 'subscribed';

    public $user;

    public function __construct($timestamp, $message_token, ViberUser $user)
    {
        parent::__construct($timestamp, $message_token);

        $this->user = $user;
    }

    public function getUserId()
    {
        return $this->user->id;
    }
}
