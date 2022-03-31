<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AccusamusQuia extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AccusamusQuia';

    private static $has_one = [
        "EtVeniam" => EtVeniam::class
    ];

    private static $has_many = [
        "EtVeniams" => EtVeniam::class
    ];

    private static $many_many = [
        "EtVeniamManys" => EtVeniam::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}