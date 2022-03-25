<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OmnisAutem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OmnisAutem';

    private static $has_one = [
        "SedEos" => SedEos::class
    ];

    private static $has_many = [
        "SedEoss" => SedEos::class
    ];

    private static $many_many = [
        "SedEosManys" => SedEos::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}