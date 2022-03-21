<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutemDucimus extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutemDucimus';

    private static $has_one = [
        "VoluptasDicta" => VoluptasDicta::class
    ];

    private static $has_many = [
        "VoluptasDictas" => VoluptasDicta::class
    ];

    private static $many_many = [
        "VoluptasDictaManys" => VoluptasDicta::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}