<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloresOdio extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloresOdio';

    private static $has_one = [
        "VoluptatemVoluptatem" => VoluptatemVoluptatem::class
    ];

    private static $has_many = [
        "VoluptatemVoluptatems" => VoluptatemVoluptatem::class
    ];

    private static $many_many = [
        "VoluptatemVoluptatemManys" => VoluptatemVoluptatem::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}