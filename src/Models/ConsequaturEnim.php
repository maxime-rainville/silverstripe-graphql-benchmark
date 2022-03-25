<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ConsequaturEnim extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ConsequaturEnim';

    private static $has_one = [
        "DelectusIure" => DelectusIure::class
    ];

    private static $has_many = [
        "DelectusIures" => DelectusIure::class
    ];

    private static $many_many = [
        "DelectusIureManys" => DelectusIure::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}