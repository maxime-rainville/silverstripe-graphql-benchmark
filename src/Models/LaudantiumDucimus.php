<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class LaudantiumDucimus extends DataObject
{
    use ModelTrait;
    private static $table_name = 'LaudantiumDucimus';

    private static $has_one = [
        "LaudantiumUnde" => LaudantiumUnde::class
    ];

    private static $has_many = [
        "LaudantiumUndes" => LaudantiumUnde::class
    ];

    private static $many_many = [
        "LaudantiumUndeManys" => LaudantiumUnde::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}