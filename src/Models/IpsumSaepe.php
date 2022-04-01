<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IpsumSaepe extends DataObject
{
    use ModelTrait;
    private static $table_name = 'IpsumSaepe';

    private static $has_one = [
        "SaepeMagnam" => SaepeMagnam::class,
        "SaepeEt" => SaepeEt::class,
        "NequeIn" => NequeIn::class
    ];

    private static $has_many = [
        "SaepeMagnams" => SaepeMagnam::class,
        "SaepeEts" => SaepeEt::class,
        "NequeIns" => NequeIn::class
    ];

    private static $many_many = [
        "SaepeMagnamManys" => SaepeMagnam::class,
        "SaepeEtManys" => SaepeEt::class,
        "NequeInManys" => NequeIn::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}