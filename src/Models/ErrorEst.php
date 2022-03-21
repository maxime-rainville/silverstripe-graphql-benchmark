<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ErrorEst extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ErrorEst';

    private static $has_one = [
        "EtRepellendus" => EtRepellendus::class
    ];

    private static $has_many = [
        "EtRepellenduss" => EtRepellendus::class
    ];

    private static $many_many = [
        "EtRepellendusManys" => EtRepellendus::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}