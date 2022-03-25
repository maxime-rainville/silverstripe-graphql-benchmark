<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DolorumMaxime extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DolorumMaxime';

    private static $has_one = [
        "TemporeAlias" => TemporeAlias::class
    ];

    private static $has_many = [
        "TemporeAliass" => TemporeAlias::class
    ];

    private static $many_many = [
        "TemporeAliasManys" => TemporeAlias::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}