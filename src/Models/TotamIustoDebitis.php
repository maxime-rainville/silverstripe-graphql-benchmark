<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class TotamIustoDebitis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'TotamIustoDebitis';

    private static $has_one = [
        "OmnisMaioresDistinctio" => OmnisMaioresDistinctio::class
    ];

    private static $has_many = [
        "OmnisMaioresDistinctios" => OmnisMaioresDistinctio::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "OmnisMaioresDistinctioManys" => OmnisMaioresDistinctio::class
    ];

    private static $extensions = [
        
    ];
}