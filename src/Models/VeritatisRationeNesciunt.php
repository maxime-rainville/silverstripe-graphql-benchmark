<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VeritatisRationeNesciunt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VeritatisRationeNesciunt';

    private static $has_one = [
        "QuiEtFacilis" => QuiEtFacilis::class
    ];

    private static $has_many = [
        "QuiEtFaciliss" => QuiEtFacilis::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "QuiEtFacilisManys" => QuiEtFacilis::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}