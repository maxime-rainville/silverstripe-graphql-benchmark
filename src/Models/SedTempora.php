<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SedTempora extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SedTempora';

    private static $has_one = [
        "OptioModi" => OptioModi::class
    ];

    private static $has_many = [
        "OptioModis" => OptioModi::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "OptioModiManys" => OptioModi::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}