<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PraesentiumTenetur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'PraesentiumTenetur';

    private static $has_one = [
        "PossimusAut" => PossimusAut::class
    ];

    private static $has_many = [
        "PossimusAuts" => PossimusAut::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "PossimusAutManys" => PossimusAut::class
    ];

    private static $extensions = [
        
    ];
}