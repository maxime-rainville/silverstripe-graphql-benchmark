<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DolorSed extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DolorSed';

    private static $has_one = [
        "IlloNesciunt" => IlloNesciunt::class
    ];

    private static $has_many = [
        "IlloNesciunts" => IlloNesciunt::class
    ];

    private static $many_many = [
        "IlloNesciuntManys" => IlloNesciunt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}