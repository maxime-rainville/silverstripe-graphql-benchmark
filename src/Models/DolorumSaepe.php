<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DolorumSaepe extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DolorumSaepe';

    private static $has_one = [
        "NumquamOccaecati" => NumquamOccaecati::class
    ];

    private static $has_many = [
        "NumquamOccaecatis" => NumquamOccaecati::class
    ];

    private static $many_many = [
        "NumquamOccaecatiManys" => NumquamOccaecati::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}