<?php
declare(strict_types=1);

namespace App;

class Observer2 extends ObserverSuperClass
{
    private float $accumulatedData1 = 0;
    private float $accumulatedData2 = 0;
    private int $dataCount = 0;

    public function __construct(ObservableSuperClass $observable)
    {
        $this->startNotifications($observable);
    }

    public function update(ObservableSuperClass $observable): void
    {
        if ($observable === $this->observable) {

            // Pull only the data you need.
            // A try/catch may be necessary
            // here since observable may not
            // respond.
            $data1 = $observable->getData1();
            $data2 = $observable->getData2();

            // Do any calculations required by
            // display method.
            $this->accumulatedData1 += $data1;
            $this->accumulatedData2 += $data2;
            $this->dataCount++;
            $this->display();
        }
    }

    public function display(): void
    {
        echo '<h1>' . basename(get_class($this)). '</h1>' . PHP_EOL;
        if ($this->dataCount > 0) {
            echo sprintf("<ul>\n<li>Average Data1: %.3f</li>%s",
                $this->accumulatedData1 / $this->dataCount, PHP_EOL);
            echo sprintf("<li>Average Data2: %.3f</li>\n</ul>%s",
                $this->accumulatedData2 / $this->dataCount, PHP_EOL);
        } else {
            echo "<ul>\n<li>Average Data1: Unknown</li>", PHP_EOL;
            echo "<li>Average Data2: Unknown</li>\n</ul>", PHP_EOL;
        }
    }

}