<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AccusantiumAut extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AccusantiumAut';

    private static $has_one = [
        "ConsequunturEt" => ConsequunturEt::class,
        "QuiDolorem" => QuiDolorem::class,
        "SedAtque" => SedAtque::class
    ];

    private static $has_many = [
        "ConsequunturEts" => ConsequunturEt::class,
        "QuiDolorems" => QuiDolorem::class,
        "SedAtques" => SedAtque::class
    ];

    private static $many_many = [
        "ConsequunturEtManys" => ConsequunturEt::class,
        "QuiDoloremManys" => QuiDolorem::class,
        "SedAtqueManys" => SedAtque::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}