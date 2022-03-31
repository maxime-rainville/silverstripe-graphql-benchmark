<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloresRerum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloresRerum';

    private static $has_one = [
        "MollitiaCupiditate" => MollitiaCupiditate::class
    ];

    private static $has_many = [
        "MollitiaCupiditates" => MollitiaCupiditate::class
    ];

    private static $many_many = [
        "MollitiaCupiditateManys" => MollitiaCupiditate::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}