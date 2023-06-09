<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/** The granularity for which to query timeseries data. */
enum GetJobTimeseriesGranularity: string
{
    case Daily = 'daily';
    case Hourly = 'hourly';
}
