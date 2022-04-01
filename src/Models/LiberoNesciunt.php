<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class LiberoNesciunt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'LiberoNesciunt';

    private static $has_one = [
        "AutEveniet" => AutEveniet::class,
        "DictaUt" => DictaUt::class,
        "MinimaNemo" => MinimaNemo::class
    ];

    private static $has_many = [
        "AutEveniets" => AutEveniet::class,
        "DictaUts" => DictaUt::class,
        "MinimaNemos" => MinimaNemo::class
    ];

    private static $many_many = [
        "MinimaNemoManys" => MinimaNemo::class
    ];

    private static $belongs_many_many = [
        "AutEvenietManys" => AutEveniet::class,
        "DictaUtManys" => DictaUt::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}