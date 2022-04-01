<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SintRepellat extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SintRepellat';

    private static $has_one = [
        "AutemNihil" => AutemNihil::class,
        "OptioEveniet" => OptioEveniet::class,
        "EstSed" => EstSed::class
    ];

    private static $has_many = [
        "AutemNihils" => AutemNihil::class,
        "OptioEveniets" => OptioEveniet::class,
        "EstSeds" => EstSed::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AutemNihilManys" => AutemNihil::class,
        "OptioEvenietManys" => OptioEveniet::class,
        "EstSedManys" => EstSed::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}