<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MollitiaQuis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MollitiaQuis';

    private static $has_one = [
        "RecusandaeQuia" => RecusandaeQuia::class,
        "UllamNihil" => UllamNihil::class,
        "AperiamNisi" => AperiamNisi::class
    ];

    private static $has_many = [
        "RecusandaeQuias" => RecusandaeQuia::class,
        "UllamNihils" => UllamNihil::class,
        "AperiamNisis" => AperiamNisi::class
    ];

    private static $many_many = [
        "RecusandaeQuiaManys" => RecusandaeQuia::class,
        "UllamNihilManys" => UllamNihil::class
    ];

    private static $belongs_many_many = [
        "AperiamNisiManys" => AperiamNisi::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}