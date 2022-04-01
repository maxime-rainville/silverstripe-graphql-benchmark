<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EosConsequuntur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EosConsequuntur';

    private static $has_one = [
        "RerumFacilis" => RerumFacilis::class,
        "MinimaPariatur" => MinimaPariatur::class,
        "QuiaAtque" => QuiaAtque::class
    ];

    private static $has_many = [
        "RerumFaciliss" => RerumFacilis::class,
        "MinimaPariaturs" => MinimaPariatur::class,
        "QuiaAtques" => QuiaAtque::class
    ];

    private static $many_many = [
        "RerumFacilisManys" => RerumFacilis::class,
        "MinimaPariaturManys" => MinimaPariatur::class,
        "QuiaAtqueManys" => QuiaAtque::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}