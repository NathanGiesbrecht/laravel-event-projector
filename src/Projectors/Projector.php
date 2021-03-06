<?php

namespace Spatie\EventProjector\Projectors;

use Carbon\Carbon;
use Spatie\EventProjector\Models\StoredEvent;

interface Projector
{
    public function getName(): string;

    public function rememberReceivedEvent(StoredEvent $storedEvent);

    public function hasReceivedAllPriorEvents(StoredEvent $storedEvent): bool;

    public function hasReceivedAllEvents(): bool;

    public function getLastProcessedEventId(): int;

    public function lastEventProcessedAt(): Carbon;

    public function resetStatus();
}
