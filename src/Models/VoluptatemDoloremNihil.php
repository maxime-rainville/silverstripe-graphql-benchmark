<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatemDoloremNihil extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatemDoloremNihil';

    private static $has_one = [
        "QuasEtNihil" => QuasEtNihil::class
    ];

    private static $has_many = [
        "QuasEtNihils" => QuasEtNihil::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "QuasEtNihilManys" => QuasEtNihil::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}