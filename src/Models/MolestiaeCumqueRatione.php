<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MolestiaeCumqueRatione extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MolestiaeCumqueRatione';

    private static $has_one = [
        "TemporibusTeneturEum" => TemporibusTeneturEum::class
    ];

    private static $has_many = [
        "TemporibusTeneturEums" => TemporibusTeneturEum::class
    ];

    private static $many_many = [
        "TemporibusTeneturEumManys" => TemporibusTeneturEum::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}