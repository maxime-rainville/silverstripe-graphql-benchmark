<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MagnamVoluptasFacilis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MagnamVoluptasFacilis';

    private static $has_one = [
        "RerumInImpedit" => RerumInImpedit::class
    ];

    private static $has_many = [
        "RerumInImpedits" => RerumInImpedit::class
    ];

    private static $many_many = [
        "RerumInImpeditManys" => RerumInImpedit::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}