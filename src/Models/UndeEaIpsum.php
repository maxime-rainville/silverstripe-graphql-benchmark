<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UndeEaIpsum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UndeEaIpsum';

    private static $has_one = [
        "FacilisVeroTenetur" => FacilisVeroTenetur::class
    ];

    private static $has_many = [
        "FacilisVeroTeneturs" => FacilisVeroTenetur::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "FacilisVeroTeneturManys" => FacilisVeroTenetur::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}