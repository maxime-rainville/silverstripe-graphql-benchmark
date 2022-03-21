<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SedNihil extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SedNihil';

    private static $has_one = [
        "QuiAliquid" => QuiAliquid::class
    ];

    private static $has_many = [
        "QuiAliquids" => QuiAliquid::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "QuiAliquidManys" => QuiAliquid::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}