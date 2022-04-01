<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OditAut extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OditAut';

    private static $has_one = [
        "RemSequi" => RemSequi::class,
        "ArchitectoDolore" => ArchitectoDolore::class,
        "EaAut" => EaAut::class
    ];

    private static $has_many = [
        "RemSequis" => RemSequi::class,
        "ArchitectoDolores" => ArchitectoDolore::class,
        "EaAuts" => EaAut::class
    ];

    private static $many_many = [
        "RemSequiManys" => RemSequi::class
    ];

    private static $belongs_many_many = [
        "ArchitectoDoloreManys" => ArchitectoDolore::class,
        "EaAutManys" => EaAut::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}