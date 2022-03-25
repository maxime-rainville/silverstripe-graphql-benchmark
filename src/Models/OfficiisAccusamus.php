<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OfficiisAccusamus extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OfficiisAccusamus';

    private static $has_one = [
        "DignissimosNihil" => DignissimosNihil::class
    ];

    private static $has_many = [
        "DignissimosNihils" => DignissimosNihil::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DignissimosNihilManys" => DignissimosNihil::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}