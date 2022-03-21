<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RepellatMolestiae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RepellatMolestiae';

    private static $has_one = [
        "InAut" => InAut::class
    ];

    private static $has_many = [
        "InAuts" => InAut::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "InAutManys" => InAut::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}