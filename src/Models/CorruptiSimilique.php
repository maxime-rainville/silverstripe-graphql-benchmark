<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CorruptiSimilique extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CorruptiSimilique';

    private static $has_one = [
        "VoluptatemSint" => VoluptatemSint::class
    ];

    private static $has_many = [
        "VoluptatemSints" => VoluptatemSint::class
    ];

    private static $many_many = [
        "VoluptatemSintManys" => VoluptatemSint::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}