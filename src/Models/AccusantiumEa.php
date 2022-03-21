<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AccusantiumEa extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AccusantiumEa';

    private static $has_one = [
        "InventoreVoluptatem" => InventoreVoluptatem::class
    ];

    private static $has_many = [
        "InventoreVoluptatems" => InventoreVoluptatem::class
    ];

    private static $many_many = [
        "InventoreVoluptatemManys" => InventoreVoluptatem::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}