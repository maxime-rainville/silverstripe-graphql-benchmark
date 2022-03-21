<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IpsamQuasi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'IpsamQuasi';

    private static $has_one = [
        "EumDoloremque" => EumDoloremque::class
    ];

    private static $has_many = [
        "EumDoloremques" => EumDoloremque::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EumDoloremqueManys" => EumDoloremque::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}