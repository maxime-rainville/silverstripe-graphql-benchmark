<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CumqueSapiente extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CumqueSapiente';

    private static $has_one = [
        "PerspiciatisSunt" => PerspiciatisSunt::class
    ];

    private static $has_many = [
        "PerspiciatisSunts" => PerspiciatisSunt::class
    ];

    private static $many_many = [
        "PerspiciatisSuntManys" => PerspiciatisSunt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}