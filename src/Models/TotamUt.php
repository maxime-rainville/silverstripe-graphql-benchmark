<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class TotamUt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'TotamUt';

    private static $has_one = [
        "DelectusEt" => DelectusEt::class
    ];

    private static $has_many = [
        "DelectusEts" => DelectusEt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DelectusEtManys" => DelectusEt::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}