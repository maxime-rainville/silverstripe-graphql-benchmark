<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CorruptiDolorum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CorruptiDolorum';

    private static $has_one = [
        "MinimaQuia" => MinimaQuia::class
    ];

    private static $has_many = [
        "MinimaQuias" => MinimaQuia::class
    ];

    private static $many_many = [
        "MinimaQuiaManys" => MinimaQuia::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}