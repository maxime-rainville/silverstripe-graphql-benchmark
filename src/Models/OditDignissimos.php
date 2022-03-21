<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OditDignissimos extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OditDignissimos';

    private static $has_one = [
        "InMagnam" => InMagnam::class
    ];

    private static $has_many = [
        "InMagnams" => InMagnam::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "InMagnamManys" => InMagnam::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}