<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaNisi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiaNisi';

    private static $has_one = [
        "EtDicta" => EtDicta::class
    ];

    private static $has_many = [
        "EtDictas" => EtDicta::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EtDictaManys" => EtDicta::class
    ];

    private static $extensions = [
        
    ];
}