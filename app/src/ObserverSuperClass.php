<?php
declare(strict_types=1);

namespace App;

abstract class ObserverSuperClass
{
    protected ?ObservableSuperClass $observable = null;

    public function startNotifications(ObservableSuperClass $observable): void
    {
        if (is_null($this->observable)) {
            $observable->addObserver($this);
            $this->observable = $observable;
        }
    }

    public function stopNotifications(): void
    {
        if (!is_null($this->observable)) {
            $this->observable->deleteObserver($this);
            $this->observable = null;
        }
    }

    abstract public function update(ObservableSuperClass $observable);
}