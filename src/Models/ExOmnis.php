<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ExOmnis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ExOmnis';

    private static $has_one = [
        "SedOmnis" => SedOmnis::class
    ];

    private static $has_many = [
        "SedOmniss" => SedOmnis::class
    ];

    private static $many_many = [
        "SedOmnisManys" => SedOmnis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}