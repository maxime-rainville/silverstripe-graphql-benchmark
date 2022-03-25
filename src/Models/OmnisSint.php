<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OmnisSint extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OmnisSint';

    private static $has_one = [
        "SolutaEveniet" => SolutaEveniet::class
    ];

    private static $has_many = [
        "SolutaEveniets" => SolutaEveniet::class
    ];

    private static $many_many = [
        "SolutaEvenietManys" => SolutaEveniet::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}