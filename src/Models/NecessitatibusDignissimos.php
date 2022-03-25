<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NecessitatibusDignissimos extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NecessitatibusDignissimos';

    private static $has_one = [
        "LaborePlaceat" => LaborePlaceat::class
    ];

    private static $has_many = [
        "LaborePlaceats" => LaborePlaceat::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "LaborePlaceatManys" => LaborePlaceat::class
    ];

    private static $extensions = [
        
    ];
}