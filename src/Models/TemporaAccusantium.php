<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class TemporaAccusantium extends DataObject
{
    use ModelTrait;
    private static $table_name = 'TemporaAccusantium';

    private static $has_one = [
        "EtAspernatur" => EtAspernatur::class
    ];

    private static $has_many = [
        "EtAspernaturs" => EtAspernatur::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EtAspernaturManys" => EtAspernatur::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}