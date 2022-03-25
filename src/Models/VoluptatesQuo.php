<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatesQuo extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatesQuo';

    private static $has_one = [
        "EsseOfficiis" => EsseOfficiis::class
    ];

    private static $has_many = [
        "EsseOfficiiss" => EsseOfficiis::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EsseOfficiisManys" => EsseOfficiis::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}