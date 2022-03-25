<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtUt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtUt';

    private static $has_one = [
        "EtDolorem" => EtDolorem::class
    ];

    private static $has_many = [
        "EtDolorems" => EtDolorem::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EtDoloremManys" => EtDolorem::class
    ];

    private static $extensions = [
        
    ];
}