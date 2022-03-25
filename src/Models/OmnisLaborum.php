<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OmnisLaborum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OmnisLaborum';

    private static $has_one = [
        "PerferendisIn" => PerferendisIn::class
    ];

    private static $has_many = [
        "PerferendisIns" => PerferendisIn::class
    ];

    private static $many_many = [
        "PerferendisInManys" => PerferendisIn::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}