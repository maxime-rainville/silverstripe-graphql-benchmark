<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class APraesentium extends DataObject
{
    use ModelTrait;
    private static $table_name = 'APraesentium';

    private static $has_one = [
        "EosDeserunt" => EosDeserunt::class
    ];

    private static $has_many = [
        "EosDeserunts" => EosDeserunt::class
    ];

    private static $many_many = [
        "EosDeseruntManys" => EosDeserunt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}