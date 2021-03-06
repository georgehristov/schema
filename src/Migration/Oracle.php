<?php

namespace atk4\schema\Migration;

// NOT IMPLEMENTED !!!
use atk4\schema\Migration;

class Oracle extends Migration
{
    /** @var array use this array in extended classes to overwrite or extend values of default mapping */
    public $mapToPersistence = [
        'date'      => ['date'],
        'datetime'  => ['date'], // in Oracle DATE data type is actually datetime
    ];

    /** @var array use this array in extended classes to overwrite or extend values of default mapping */
    public $mapToAgile = [
        'date'      => ['datetime'],
    ];
}
