<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ConsequunturErrorFugit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ConsequunturErrorFugit';

    private static $has_one = [
        "SuntReprehenderitQuia" => SuntReprehenderitQuia::class
    ];

    private static $has_many = [
        "SuntReprehenderitQuias" => SuntReprehenderitQuia::class
    ];

    private static $many_many = [
        "SuntReprehenderitQuiaManys" => SuntReprehenderitQuia::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}