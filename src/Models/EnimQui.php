<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EnimQui extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EnimQui';

    private static $has_one = [
        "LiberoTotam" => LiberoTotam::class,
        "IdQuasi" => IdQuasi::class,
        "PerspiciatisEst" => PerspiciatisEst::class
    ];

    private static $has_many = [
        "LiberoTotams" => LiberoTotam::class,
        "IdQuasis" => IdQuasi::class,
        "PerspiciatisEsts" => PerspiciatisEst::class
    ];

    private static $many_many = [
        "LiberoTotamManys" => LiberoTotam::class,
        "IdQuasiManys" => IdQuasi::class,
        "PerspiciatisEstManys" => PerspiciatisEst::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}