<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SapienteSaepe extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SapienteSaepe';

    private static $has_one = [
        "QuiMinus" => QuiMinus::class
    ];

    private static $has_many = [
        "QuiMinuss" => QuiMinus::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "QuiMinusManys" => QuiMinus::class
    ];

    private static $extensions = [
        
    ];
}