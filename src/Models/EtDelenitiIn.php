<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtDelenitiIn extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtDelenitiIn';

    private static $has_one = [
        "SuntSitAutem" => SuntSitAutem::class
    ];

    private static $has_many = [
        "SuntSitAutems" => SuntSitAutem::class
    ];

    private static $many_many = [
        "SuntSitAutemManys" => SuntSitAutem::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}