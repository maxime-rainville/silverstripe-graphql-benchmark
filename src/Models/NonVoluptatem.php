<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NonVoluptatem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NonVoluptatem';

    private static $has_one = [
        "DistinctioRepudiandae" => DistinctioRepudiandae::class
    ];

    private static $has_many = [
        "DistinctioRepudiandaes" => DistinctioRepudiandae::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DistinctioRepudiandaeManys" => DistinctioRepudiandae::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}