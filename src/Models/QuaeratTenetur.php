<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuaeratTenetur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuaeratTenetur';

    private static $has_one = [
        "IureVeritatis" => IureVeritatis::class
    ];

    private static $has_many = [
        "IureVeritatiss" => IureVeritatis::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "IureVeritatisManys" => IureVeritatis::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}