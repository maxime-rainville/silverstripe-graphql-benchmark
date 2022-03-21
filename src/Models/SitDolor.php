<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SitDolor extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SitDolor';

    private static $has_one = [
        "EstQuasi" => EstQuasi::class
    ];

    private static $has_many = [
        "EstQuasis" => EstQuasi::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EstQuasiManys" => EstQuasi::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}