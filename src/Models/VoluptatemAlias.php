<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatemAlias extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatemAlias';

    private static $has_one = [
        "EaqueQuia" => EaqueQuia::class
    ];

    private static $has_many = [
        "EaqueQuias" => EaqueQuia::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EaqueQuiaManys" => EaqueQuia::class
    ];

    private static $extensions = [
        
    ];
}