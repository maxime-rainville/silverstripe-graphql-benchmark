<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AliasPossimusEst extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AliasPossimusEst';

    private static $has_one = [
        "EligendiItaqueVeniam" => EligendiItaqueVeniam::class
    ];

    private static $has_many = [
        "EligendiItaqueVeniams" => EligendiItaqueVeniam::class
    ];

    private static $many_many = [
        "EligendiItaqueVeniamManys" => EligendiItaqueVeniam::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}