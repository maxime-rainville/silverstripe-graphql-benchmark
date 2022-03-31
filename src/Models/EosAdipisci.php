<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EosAdipisci extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EosAdipisci';

    private static $has_one = [
        "IpsumOccaecati" => IpsumOccaecati::class
    ];

    private static $has_many = [
        "IpsumOccaecatis" => IpsumOccaecati::class
    ];

    private static $many_many = [
        "IpsumOccaecatiManys" => IpsumOccaecati::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}