<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UllamReprehenderit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UllamReprehenderit';

    private static $has_one = [
        "NihilCupiditate" => NihilCupiditate::class
    ];

    private static $has_many = [
        "NihilCupiditates" => NihilCupiditate::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "NihilCupiditateManys" => NihilCupiditate::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}