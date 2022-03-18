<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RepudiandaeQuisquamOmnis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RepudiandaeQuisquamOmnis';

    private static $has_one = [
        "QuosAliquidAperiam" => QuosAliquidAperiam::class
    ];

    private static $has_many = [
        "QuosAliquidAperiams" => QuosAliquidAperiam::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "QuosAliquidAperiamManys" => QuosAliquidAperiam::class
    ];

    private static $extensions = [
        
    ];
}