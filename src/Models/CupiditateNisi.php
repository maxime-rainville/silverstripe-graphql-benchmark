<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CupiditateNisi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CupiditateNisi';

    private static $has_one = [
        "EstQuidem" => EstQuidem::class
    ];

    private static $has_many = [
        "EstQuidems" => EstQuidem::class
    ];

    private static $many_many = [
        "EstQuidemManys" => EstQuidem::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}