<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiDolor extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiDolor';

    private static $has_one = [
        "ConsequunturIllum" => ConsequunturIllum::class
    ];

    private static $has_many = [
        "ConsequunturIllums" => ConsequunturIllum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ConsequunturIllumManys" => ConsequunturIllum::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}