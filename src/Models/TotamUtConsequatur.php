<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class TotamUtConsequatur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'TotamUtConsequatur';

    private static $has_one = [
        "NatusEligendiEnim" => NatusEligendiEnim::class
    ];

    private static $has_many = [
        "NatusEligendiEnims" => NatusEligendiEnim::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "NatusEligendiEnimManys" => NatusEligendiEnim::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}