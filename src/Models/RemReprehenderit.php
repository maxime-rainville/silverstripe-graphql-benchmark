<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RemReprehenderit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RemReprehenderit';

    private static $has_one = [
        "DoloremqueVoluptatem" => DoloremqueVoluptatem::class
    ];

    private static $has_many = [
        "DoloremqueVoluptatems" => DoloremqueVoluptatem::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DoloremqueVoluptatemManys" => DoloremqueVoluptatem::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}