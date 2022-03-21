<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptasSint extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptasSint';

    private static $has_one = [
        "IlloEnim" => IlloEnim::class
    ];

    private static $has_many = [
        "IlloEnims" => IlloEnim::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "IlloEnimManys" => IlloEnim::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}