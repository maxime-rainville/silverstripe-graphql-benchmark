<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptasEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptasEt';

    private static $has_one = [
        "PraesentiumEt" => PraesentiumEt::class
    ];

    private static $has_many = [
        "PraesentiumEts" => PraesentiumEt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "PraesentiumEtManys" => PraesentiumEt::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}