<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RecusandaeTemporeRecusandae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RecusandaeTemporeRecusandae';

    private static $has_one = [
        "OfficiisFacereQuasi" => OfficiisFacereQuasi::class
    ];

    private static $has_many = [
        "OfficiisFacereQuasis" => OfficiisFacereQuasi::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "OfficiisFacereQuasiManys" => OfficiisFacereQuasi::class
    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}