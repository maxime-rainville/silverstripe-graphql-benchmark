<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuisquamVitae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuisquamVitae';

    private static $has_one = [
        "HicMollitia" => HicMollitia::class
    ];

    private static $has_many = [
        "HicMollitias" => HicMollitia::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "HicMollitiaManys" => HicMollitia::class
    ];

    private static $extensions = [
        
    ];
}