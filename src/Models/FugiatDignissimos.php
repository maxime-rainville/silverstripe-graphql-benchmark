<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class FugiatDignissimos extends DataObject
{
    use ModelTrait;
    private static $table_name = 'FugiatDignissimos';

    private static $has_one = [
        "TemporaOdit" => TemporaOdit::class
    ];

    private static $has_many = [
        "TemporaOdits" => TemporaOdit::class
    ];

    private static $many_many = [
        "TemporaOditManys" => TemporaOdit::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}