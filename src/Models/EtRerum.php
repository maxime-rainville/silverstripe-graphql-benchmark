<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtRerum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtRerum';

    private static $has_one = [
        "EtLaborum" => EtLaborum::class
    ];

    private static $has_many = [
        "EtLaborums" => EtLaborum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EtLaborumManys" => EtLaborum::class
    ];

    private static $extensions = [
        
    ];
}