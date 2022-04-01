<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AccusamusTenetur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AccusamusTenetur';

    private static $has_one = [
        "FugitNihil" => FugitNihil::class,
        "QuosVoluptatem" => QuosVoluptatem::class,
        "EstNon" => EstNon::class
    ];

    private static $has_many = [
        "FugitNihils" => FugitNihil::class,
        "QuosVoluptatems" => QuosVoluptatem::class,
        "EstNons" => EstNon::class
    ];

    private static $many_many = [
        "FugitNihilManys" => FugitNihil::class,
        "QuosVoluptatemManys" => QuosVoluptatem::class,
        "EstNonManys" => EstNon::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}