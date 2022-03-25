<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DignissimosVoluptatem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DignissimosVoluptatem';

    private static $has_one = [
        "EaNecessitatibus" => EaNecessitatibus::class
    ];

    private static $has_many = [
        "EaNecessitatibuss" => EaNecessitatibus::class
    ];

    private static $many_many = [
        "EaNecessitatibusManys" => EaNecessitatibus::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}