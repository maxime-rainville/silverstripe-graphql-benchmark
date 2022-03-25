<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtCorrupti extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtCorrupti';

    private static $has_one = [
        "ConsequaturSunt" => ConsequaturSunt::class
    ];

    private static $has_many = [
        "ConsequaturSunts" => ConsequaturSunt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ConsequaturSuntManys" => ConsequaturSunt::class
    ];

    private static $extensions = [
        
    ];
}