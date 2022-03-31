<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CupiditateNeque extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CupiditateNeque';

    private static $has_one = [
        "QuiaNulla" => QuiaNulla::class
    ];

    private static $has_many = [
        "QuiaNullas" => QuiaNulla::class
    ];

    private static $many_many = [
        "QuiaNullaManys" => QuiaNulla::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}