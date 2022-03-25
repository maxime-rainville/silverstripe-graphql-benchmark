<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtAliquid extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtAliquid';

    private static $has_one = [
        "ImpeditEt" => ImpeditEt::class
    ];

    private static $has_many = [
        "ImpeditEts" => ImpeditEt::class
    ];

    private static $many_many = [
        "ImpeditEtManys" => ImpeditEt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}