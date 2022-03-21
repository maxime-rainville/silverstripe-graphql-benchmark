<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AbMagni extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AbMagni';

    private static $has_one = [
        "OmnisEst" => OmnisEst::class
    ];

    private static $has_many = [
        "OmnisEsts" => OmnisEst::class
    ];

    private static $many_many = [
        "OmnisEstManys" => OmnisEst::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}