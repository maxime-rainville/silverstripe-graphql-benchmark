<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NostrumConsequatur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NostrumConsequatur';

    private static $has_one = [
        "NatusUt" => NatusUt::class
    ];

    private static $has_many = [
        "NatusUts" => NatusUt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "NatusUtManys" => NatusUt::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}