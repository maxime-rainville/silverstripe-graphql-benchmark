<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloresExpedita extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloresExpedita';

    private static $has_one = [
        "OmnisNesciunt" => OmnisNesciunt::class
    ];

    private static $has_many = [
        "OmnisNesciunts" => OmnisNesciunt::class
    ];

    private static $many_many = [
        "OmnisNesciuntManys" => OmnisNesciunt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}