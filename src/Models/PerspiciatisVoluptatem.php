<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PerspiciatisVoluptatem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'PerspiciatisVoluptatem';

    private static $has_one = [
        "VitaeVel" => VitaeVel::class
    ];

    private static $has_many = [
        "VitaeVels" => VitaeVel::class
    ];

    private static $many_many = [
        "VitaeVelManys" => VitaeVel::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}