<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuisquamVitaeQuod extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuisquamVitaeQuod';

    private static $has_one = [
        "EiusDoloremQuod" => EiusDoloremQuod::class
    ];

    private static $has_many = [
        "EiusDoloremQuods" => EiusDoloremQuod::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EiusDoloremQuodManys" => EiusDoloremQuod::class
    ];

    private static $extensions = [
        
    ];
}