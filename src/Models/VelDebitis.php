<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VelDebitis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VelDebitis';

    private static $has_one = [
        "AtAutem" => AtAutem::class,
        "SitCumque" => SitCumque::class,
        "InDolorum" => InDolorum::class
    ];

    private static $has_many = [
        "AtAutems" => AtAutem::class,
        "SitCumques" => SitCumque::class,
        "InDolorums" => InDolorum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AtAutemManys" => AtAutem::class,
        "SitCumqueManys" => SitCumque::class,
        "InDolorumManys" => InDolorum::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}