<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MinusMinima extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MinusMinima';

    private static $has_one = [
        "ExpeditaSequi" => ExpeditaSequi::class
    ];

    private static $has_many = [
        "ExpeditaSequis" => ExpeditaSequi::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ExpeditaSequiManys" => ExpeditaSequi::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}