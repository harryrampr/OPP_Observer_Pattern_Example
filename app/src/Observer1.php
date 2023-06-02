<?php
declare(strict_types=1);

namespace App;

class Observer1 extends ObserverSuperClass
{
    private ?float $data1 = null;
    private ?float $data2 = null;

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
            $this->data1 = $data1;
            $this->data2 = $data2;
            $this->display();
        }
    }

    public function display(): void
    {
        echo '<h1>' . basename(get_class($this)) . '</h1>' . PHP_EOL;
        if (is_null($this->data1) || is_null($this->data2)) {
            echo sprintf("<ul>\n<li>Data1: %s</li>%s", 'Unknown', PHP_EOL);
            echo sprintf("<li>Data2: %s</li>\n</ul>%s", 'Unknown', PHP_EOL);

        } else {
            echo sprintf("<ul>\n<li>Data1: %.1F</li>%s", $this->data1, PHP_EOL);
            echo sprintf("<li>Data2: %.1F</li>\n</ul>%s", $this->data2, PHP_EOL);
        }
    }

}