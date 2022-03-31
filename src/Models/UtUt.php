<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtUt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UtUt';

    private static $has_one = [
        "VoluptasDoloremque" => VoluptasDoloremque::class
    ];

    private static $has_many = [
        "VoluptasDoloremques" => VoluptasDoloremque::class
    ];

    private static $many_many = [
        "VoluptasDoloremqueManys" => VoluptasDoloremque::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}