<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaNulla extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiaNulla';

    private static $has_one = [
        "CupiditateNeque" => CupiditateNeque::class
    ];

    private static $has_many = [
        "CupiditateNeques" => CupiditateNeque::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "CupiditateNequeManys" => CupiditateNeque::class
    ];

    private static $extensions = [
        
    ];
}