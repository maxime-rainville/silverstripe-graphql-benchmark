<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class TemporibusBeatae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'TemporibusBeatae';

    private static $has_one = [
        "RerumModi" => RerumModi::class
    ];

    private static $has_many = [
        "RerumModis" => RerumModi::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "RerumModiManys" => RerumModi::class
    ];

    private static $extensions = [
        
    ];
}