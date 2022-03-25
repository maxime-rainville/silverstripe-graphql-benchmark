<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ConsequaturSunt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ConsequaturSunt';

    private static $has_one = [
        "EtCorrupti" => EtCorrupti::class
    ];

    private static $has_many = [
        "EtCorruptis" => EtCorrupti::class
    ];

    private static $many_many = [
        "EtCorruptiManys" => EtCorrupti::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}