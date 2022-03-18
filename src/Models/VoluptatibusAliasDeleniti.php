<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatibusAliasDeleniti extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatibusAliasDeleniti';

    private static $has_one = [
        "ItaqueRerumMolestiae" => ItaqueRerumMolestiae::class
    ];

    private static $has_many = [
        "ItaqueRerumMolestiaes" => ItaqueRerumMolestiae::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ItaqueRerumMolestiaeManys" => ItaqueRerumMolestiae::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}