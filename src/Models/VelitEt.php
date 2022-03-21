<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VelitEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VelitEt';

    private static $has_one = [
        "EarumDolorem" => EarumDolorem::class
    ];

    private static $has_many = [
        "EarumDolorems" => EarumDolorem::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EarumDoloremManys" => EarumDolorem::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}