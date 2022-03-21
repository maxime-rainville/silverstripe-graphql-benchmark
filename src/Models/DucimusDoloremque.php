<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DucimusDoloremque extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DucimusDoloremque';

    private static $has_one = [
        "VoluptatumNihil" => VoluptatumNihil::class
    ];

    private static $has_many = [
        "VoluptatumNihils" => VoluptatumNihil::class
    ];

    private static $many_many = [
        "VoluptatumNihilManys" => VoluptatumNihil::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}