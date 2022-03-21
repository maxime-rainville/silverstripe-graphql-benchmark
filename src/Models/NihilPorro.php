<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NihilPorro extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NihilPorro';

    private static $has_one = [
        "EligendiVelit" => EligendiVelit::class
    ];

    private static $has_many = [
        "EligendiVelits" => EligendiVelit::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EligendiVelitManys" => EligendiVelit::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}