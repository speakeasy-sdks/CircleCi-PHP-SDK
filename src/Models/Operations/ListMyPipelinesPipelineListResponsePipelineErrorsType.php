<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/** The type of error. */
enum ListMyPipelinesPipelineListResponsePipelineErrorsType: string
{
    case CONFIG = 'config';
    case CONFIG_FETCH = 'config-fetch';
    case TIMEOUT = 'timeout';
    case PERMISSION = 'permission';
    case OTHER = 'other';
    case PLAN = 'plan';
}