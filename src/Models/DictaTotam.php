<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DictaTotam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DictaTotam';

    private static $has_one = [
        "OccaecatiNihil" => OccaecatiNihil::class
    ];

    private static $has_many = [
        "OccaecatiNihils" => OccaecatiNihil::class
    ];

    private static $many_many = [
        "OccaecatiNihilManys" => OccaecatiNihil::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}