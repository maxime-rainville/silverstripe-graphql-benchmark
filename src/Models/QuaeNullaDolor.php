<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuaeNullaDolor extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuaeNullaDolor';

    private static $has_one = [
        "HarumIustoCumque" => HarumIustoCumque::class
    ];

    private static $has_many = [
        "HarumIustoCumques" => HarumIustoCumque::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "HarumIustoCumqueManys" => HarumIustoCumque::class
    ];

    private static $extensions = [
        
    ];
}