<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class LiberoNulla extends DataObject
{
    use ModelTrait;
    private static $table_name = 'LiberoNulla';

    private static $has_one = [
        "IdCorrupti" => IdCorrupti::class
    ];

    private static $has_many = [
        "IdCorruptis" => IdCorrupti::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "IdCorruptiManys" => IdCorrupti::class
    ];

    private static $extensions = [
        
    ];
}