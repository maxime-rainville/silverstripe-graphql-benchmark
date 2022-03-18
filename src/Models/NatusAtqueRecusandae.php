<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NatusAtqueRecusandae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NatusAtqueRecusandae';

    private static $has_one = [
        "SapienteSolutaVoluptas" => SapienteSolutaVoluptas::class
    ];

    private static $has_many = [
        "SapienteSolutaVoluptass" => SapienteSolutaVoluptas::class
    ];

    private static $many_many = [
        "SapienteSolutaVoluptasManys" => SapienteSolutaVoluptas::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}