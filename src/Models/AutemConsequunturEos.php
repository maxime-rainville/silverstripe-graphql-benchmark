<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutemConsequunturEos extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutemConsequunturEos';

    private static $has_one = [
        "VoluptateDignissimosTempore" => VoluptateDignissimosTempore::class
    ];

    private static $has_many = [
        "VoluptateDignissimosTempores" => VoluptateDignissimosTempore::class
    ];

    private static $many_many = [
        "VoluptateDignissimosTemporeManys" => VoluptateDignissimosTempore::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}