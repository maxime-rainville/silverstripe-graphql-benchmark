<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class LaudantiumUnde extends DataObject
{
    use ModelTrait;
    private static $table_name = 'LaudantiumUnde';

    private static $has_one = [
        "LaudantiumDucimus" => LaudantiumDucimus::class
    ];

    private static $has_many = [
        "LaudantiumDucimuss" => LaudantiumDucimus::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "LaudantiumDucimusManys" => LaudantiumDucimus::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}