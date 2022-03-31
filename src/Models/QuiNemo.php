<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiNemo extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiNemo';

    private static $has_one = [
        "ConsequaturNemo" => ConsequaturNemo::class
    ];

    private static $has_many = [
        "ConsequaturNemos" => ConsequaturNemo::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ConsequaturNemoManys" => ConsequaturNemo::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}