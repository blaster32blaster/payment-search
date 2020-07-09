<?php

namespace App;

use ScoutElastic\IndexConfigurator;
use ScoutElastic\Migratable;

class MyIndexConfigurator extends IndexConfigurator
{
    use Migratable;

    /**
     * the index name
     *
     * @var string
     */
    protected $name = 'my';

    /**
     * @var array
     */
    protected $settings = [
        //
    ];
}
