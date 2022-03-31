<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiaEt';

    private static $has_one = [
        "BlanditiisVoluptas" => BlanditiisVoluptas::class
    ];

    private static $has_many = [
        "BlanditiisVoluptass" => BlanditiisVoluptas::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "BlanditiisVoluptasManys" => BlanditiisVoluptas::class
    ];

    private static $extensions = [
        
    ];
}