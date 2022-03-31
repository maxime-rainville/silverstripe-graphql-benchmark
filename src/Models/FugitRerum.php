<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class FugitRerum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'FugitRerum';

    private static $has_one = [
        "CupiditateEos" => CupiditateEos::class
    ];

    private static $has_many = [
        "CupiditateEoss" => CupiditateEos::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "CupiditateEosManys" => CupiditateEos::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}