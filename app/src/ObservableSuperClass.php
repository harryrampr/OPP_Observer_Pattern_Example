<?php
declare(strict_types=1);

namespace App;

abstract class ObservableSuperClass
{
    protected array $observers = [];
    protected bool $changed = false;

    public function addObserver(ObserverSuperClass $observer): void
    {
        if (!in_array($observer, $this->observers)) {
            $this->observers[] = $observer;
        }
    }

    public function deleteObserver(ObserverSuperClass $observer): void
    {
        $key = array_search($observer, $this->observers);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    protected function setChanged(bool $changed = true): void
    {
        $this->changed = $changed;
    }

    abstract protected function notifyObservers();
}