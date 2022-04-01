<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DeseruntVel extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DeseruntVel';

    private static $has_one = [
        "EstVeritatis" => EstVeritatis::class,
        "SedNon" => SedNon::class,
        "EtNemo" => EtNemo::class
    ];

    private static $has_many = [
        "EstVeritatiss" => EstVeritatis::class,
        "SedNons" => SedNon::class,
        "EtNemos" => EtNemo::class
    ];

    private static $many_many = [
        "EstVeritatisManys" => EstVeritatis::class,
        "SedNonManys" => SedNon::class,
        "EtNemoManys" => EtNemo::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}