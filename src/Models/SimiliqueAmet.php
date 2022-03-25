<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SimiliqueAmet extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SimiliqueAmet';

    private static $has_one = [
        "AutMolestias" => AutMolestias::class
    ];

    private static $has_many = [
        "AutMolestiass" => AutMolestias::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AutMolestiasManys" => AutMolestias::class
    ];

    private static $extensions = [
        
    ];
}