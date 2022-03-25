<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SintMolestiae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SintMolestiae';

    private static $has_one = [
        "BeataeQuo" => BeataeQuo::class
    ];

    private static $has_many = [
        "BeataeQuos" => BeataeQuo::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "BeataeQuoManys" => BeataeQuo::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}