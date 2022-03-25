<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IsteDistinctio extends DataObject
{
    use ModelTrait;
    private static $table_name = 'IsteDistinctio';

    private static $has_one = [
        "QuiaMollitia" => QuiaMollitia::class
    ];

    private static $has_many = [
        "QuiaMollitias" => QuiaMollitia::class
    ];

    private static $many_many = [
        "QuiaMollitiaManys" => QuiaMollitia::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}