<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/** Workflow status. */
enum GetProjectWorkflowRuns200ApplicationJSONItemsStatusEnum: string
{
    case SUCCESS = 'success';
    case FAILED = 'failed';
    case ERROR = 'error';
    case CANCELED = 'canceled';
    case UNAUTHORIZED = 'unauthorized';
}