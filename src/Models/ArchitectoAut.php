<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ArchitectoAut extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ArchitectoAut';

    private static $has_one = [
        "NesciuntSed" => NesciuntSed::class
    ];

    private static $has_many = [
        "NesciuntSeds" => NesciuntSed::class
    ];

    private static $many_many = [
        "NesciuntSedManys" => NesciuntSed::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}