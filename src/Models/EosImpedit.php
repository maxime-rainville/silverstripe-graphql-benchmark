<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EosImpedit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EosImpedit';

    private static $has_one = [
        "VoluptatumPlaceat" => VoluptatumPlaceat::class
    ];

    private static $has_many = [
        "VoluptatumPlaceats" => VoluptatumPlaceat::class
    ];

    private static $many_many = [
        "VoluptatumPlaceatManys" => VoluptatumPlaceat::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}