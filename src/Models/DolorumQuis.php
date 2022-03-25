<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DolorumQuis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DolorumQuis';

    private static $has_one = [
        "AliquamEum" => AliquamEum::class
    ];

    private static $has_many = [
        "AliquamEums" => AliquamEum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AliquamEumManys" => AliquamEum::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}