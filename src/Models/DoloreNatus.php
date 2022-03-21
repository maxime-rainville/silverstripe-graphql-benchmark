<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloreNatus extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloreNatus';

    private static $has_one = [
        "EaFugiat" => EaFugiat::class
    ];

    private static $has_many = [
        "EaFugiats" => EaFugiat::class
    ];

    private static $many_many = [
        "EaFugiatManys" => EaFugiat::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}