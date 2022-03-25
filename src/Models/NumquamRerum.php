<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NumquamRerum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NumquamRerum';

    private static $has_one = [
        "QuisProvident" => QuisProvident::class
    ];

    private static $has_many = [
        "QuisProvidents" => QuisProvident::class
    ];

    private static $many_many = [
        "QuisProvidentManys" => QuisProvident::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}