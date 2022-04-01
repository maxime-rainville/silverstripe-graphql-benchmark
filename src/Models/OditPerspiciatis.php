<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OditPerspiciatis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OditPerspiciatis';

    private static $has_one = [
        "NihilNesciunt" => NihilNesciunt::class,
        "VeroDolorem" => VeroDolorem::class,
        "FacereLaborum" => FacereLaborum::class
    ];

    private static $has_many = [
        "NihilNesciunts" => NihilNesciunt::class,
        "VeroDolorems" => VeroDolorem::class,
        "FacereLaborums" => FacereLaborum::class
    ];

    private static $many_many = [
        "VeroDoloremManys" => VeroDolorem::class
    ];

    private static $belongs_many_many = [
        "NihilNesciuntManys" => NihilNesciunt::class,
        "FacereLaborumManys" => FacereLaborum::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}