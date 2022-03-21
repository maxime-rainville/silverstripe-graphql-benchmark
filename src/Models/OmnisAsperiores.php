<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OmnisAsperiores extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OmnisAsperiores';

    private static $has_one = [
        "UtDolorem" => UtDolorem::class
    ];

    private static $has_many = [
        "UtDolorems" => UtDolorem::class
    ];

    private static $many_many = [
        "UtDoloremManys" => UtDolorem::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}