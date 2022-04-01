<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtAb extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UtAb';

    private static $has_one = [
        "AutFugit" => AutFugit::class,
        "ArchitectoTotam" => ArchitectoTotam::class,
        "QuiLaboriosam" => QuiLaboriosam::class
    ];

    private static $has_many = [
        "AutFugits" => AutFugit::class,
        "ArchitectoTotams" => ArchitectoTotam::class,
        "QuiLaboriosams" => QuiLaboriosam::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AutFugitManys" => AutFugit::class,
        "ArchitectoTotamManys" => ArchitectoTotam::class,
        "QuiLaboriosamManys" => QuiLaboriosam::class
    ];

    private static $extensions = [
        
    ];
}