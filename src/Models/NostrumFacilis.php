<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NostrumFacilis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NostrumFacilis';

    private static $has_one = [
        "FugaCorrupti" => FugaCorrupti::class,
        "VoluptatemAut" => VoluptatemAut::class,
        "AutSimilique" => AutSimilique::class
    ];

    private static $has_many = [
        "FugaCorruptis" => FugaCorrupti::class,
        "VoluptatemAuts" => VoluptatemAut::class,
        "AutSimiliques" => AutSimilique::class
    ];

    private static $many_many = [
        "VoluptatemAutManys" => VoluptatemAut::class
    ];

    private static $belongs_many_many = [
        "FugaCorruptiManys" => FugaCorrupti::class,
        "AutSimiliqueManys" => AutSimilique::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}