<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IdQuasi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'IdQuasi';

    private static $has_one = [
        "LiberoTotam" => LiberoTotam::class,
        "EnimQui" => EnimQui::class,
        "PerspiciatisEst" => PerspiciatisEst::class
    ];

    private static $has_many = [
        "LiberoTotams" => LiberoTotam::class,
        "EnimQuis" => EnimQui::class,
        "PerspiciatisEsts" => PerspiciatisEst::class
    ];

    private static $many_many = [
        "LiberoTotamManys" => LiberoTotam::class,
        "PerspiciatisEstManys" => PerspiciatisEst::class
    ];

    private static $belongs_many_many = [
        "EnimQuiManys" => EnimQui::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}