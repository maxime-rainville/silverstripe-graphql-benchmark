<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtDolorem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UtDolorem';

    private static $has_one = [
        "OmnisAsperiores" => OmnisAsperiores::class
    ];

    private static $has_many = [
        "OmnisAsperioress" => OmnisAsperiores::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "OmnisAsperioresManys" => OmnisAsperiores::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}