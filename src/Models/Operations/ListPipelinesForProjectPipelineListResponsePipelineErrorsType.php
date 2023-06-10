<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/** The type of error. */
enum ListPipelinesForProjectPipelineListResponsePipelineErrorsType: string
{
    case Config = 'config';
    case ConfigFetch = 'config-fetch';
    case Timeout = 'timeout';
    case Permission = 'permission';
    case Other = 'other';
    case Plan = 'plan';
}
