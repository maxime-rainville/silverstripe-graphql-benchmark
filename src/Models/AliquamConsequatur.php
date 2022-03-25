<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AliquamConsequatur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AliquamConsequatur';

    private static $has_one = [
        "OditCum" => OditCum::class
    ];

    private static $has_many = [
        "OditCums" => OditCum::class
    ];

    private static $many_many = [
        "OditCumManys" => OditCum::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}