<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloremOfficiis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloremOfficiis';

    private static $has_one = [
        "PerspiciatisEst" => PerspiciatisEst::class
    ];

    private static $has_many = [
        "PerspiciatisEsts" => PerspiciatisEst::class
    ];

    private static $many_many = [
        "PerspiciatisEstManys" => PerspiciatisEst::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}