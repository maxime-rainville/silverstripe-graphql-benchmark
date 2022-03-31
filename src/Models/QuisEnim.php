<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuisEnim extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuisEnim';

    private static $has_one = [
        "DelectusQuam" => DelectusQuam::class
    ];

    private static $has_many = [
        "DelectusQuams" => DelectusQuam::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DelectusQuamManys" => DelectusQuam::class
    ];

    private static $extensions = [
        
    ];
}