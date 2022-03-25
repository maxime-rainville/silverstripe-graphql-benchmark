<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SitQuam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SitQuam';

    private static $has_one = [
        "ArchitectoSed" => ArchitectoSed::class
    ];

    private static $has_many = [
        "ArchitectoSeds" => ArchitectoSed::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ArchitectoSedManys" => ArchitectoSed::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}