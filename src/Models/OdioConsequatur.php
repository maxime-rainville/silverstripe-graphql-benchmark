<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OdioConsequatur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OdioConsequatur';

    private static $has_one = [
        "FugaEa" => FugaEa::class
    ];

    private static $has_many = [
        "FugaEas" => FugaEa::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "FugaEaManys" => FugaEa::class
    ];

    private static $extensions = [
        
    ];
}