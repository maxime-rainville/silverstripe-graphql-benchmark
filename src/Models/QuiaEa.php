<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaEa extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiaEa';

    private static $has_one = [
        "InNihil" => InNihil::class
    ];

    private static $has_many = [
        "InNihils" => InNihil::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "InNihilManys" => InNihil::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}