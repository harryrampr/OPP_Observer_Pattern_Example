<?php
declare(strict_types=1);

namespace App;


class Observable extends ObservableSuperClass
{
    private float $data1;
    private float $data2;

    public function getData1(): float
    {
        return $this->data1;
    }

    public function getData2(): float
    {
        return $this->data2;
    }

    /**
     * @param float $data1
     * @param float $data2
     * @return void
     */
    public function setData(float $data1, float $data2): void
    {
        $this->data1 = $data1;
        $this->data2 = $data2;

        $this->newDataReceived();
    }

    private function newDataReceived(): void
    {
        // By calling setChanged you can establish that the
        // change worth notifying observers. Minor changes
        // can be ignored by not calling it.
        $this->setChanged();

        // notifyObservers doesn't have to be called every
        // time setState is called, it can be called on a time
        // base or by some other criteria.
        $this->notifyObservers();
    }

    protected function notifyObservers(): void
    {
        if ($this->changed) {
            foreach ($this->observers as $observer) {

                // A try/catch may be necessary here
                // since observer may not be online
                $observer->update($this);
            }
            $this->setChanged(false);
        }
    }
}