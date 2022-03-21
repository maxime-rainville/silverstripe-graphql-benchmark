<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ConsequunturIllum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ConsequunturIllum';

    private static $has_one = [
        "QuiDolor" => QuiDolor::class
    ];

    private static $has_many = [
        "QuiDolors" => QuiDolor::class
    ];

    private static $many_many = [
        "QuiDolorManys" => QuiDolor::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}