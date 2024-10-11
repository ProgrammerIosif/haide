<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Event;

class EventPolicy
{
    public function edit(User $user, Event $event) {
        return $event->organizer->is($user);
    }
}
