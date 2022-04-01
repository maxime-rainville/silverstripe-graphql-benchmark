<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuisProvident extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuisProvident';

    private static $has_one = [
        "IdUt" => IdUt::class,
        "AbLaudantium" => AbLaudantium::class,
        "SolutaVitae" => SolutaVitae::class
    ];

    private static $has_many = [
        "IdUts" => IdUt::class,
        "AbLaudantiums" => AbLaudantium::class,
        "SolutaVitaes" => SolutaVitae::class
    ];

    private static $many_many = [
        "SolutaVitaeManys" => SolutaVitae::class
    ];

    private static $belongs_many_many = [
        "IdUtManys" => IdUt::class,
        "AbLaudantiumManys" => AbLaudantium::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}