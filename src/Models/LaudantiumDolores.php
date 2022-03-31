<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class LaudantiumDolores extends DataObject
{
    use ModelTrait;
    private static $table_name = 'LaudantiumDolores';

    private static $has_one = [
        "MolestiaeEt" => MolestiaeEt::class
    ];

    private static $has_many = [
        "MolestiaeEts" => MolestiaeEt::class
    ];

    private static $many_many = [
        "MolestiaeEtManys" => MolestiaeEt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}