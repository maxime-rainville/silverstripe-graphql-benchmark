<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NumquamEveniet extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NumquamEveniet';

    private static $has_one = [
        "DoloremVoluptatem" => DoloremVoluptatem::class
    ];

    private static $has_many = [
        "DoloremVoluptatems" => DoloremVoluptatem::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DoloremVoluptatemManys" => DoloremVoluptatem::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}