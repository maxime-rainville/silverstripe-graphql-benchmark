<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ReprehenderitQuo extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ReprehenderitQuo';

    private static $has_one = [
        "AdAssumenda" => AdAssumenda::class
    ];

    private static $has_many = [
        "AdAssumendas" => AdAssumenda::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AdAssumendaManys" => AdAssumenda::class
    ];

    private static $extensions = [
        
    ];
}