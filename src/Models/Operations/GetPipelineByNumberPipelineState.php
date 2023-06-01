<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/** The current state of the pipeline. */
enum GetPipelineByNumberPipelineState: string
{
    case CREATED = 'created';
    case ERRORED = 'errored';
    case SETUP_PENDING = 'setup-pending';
    case SETUP = 'setup';
    case PENDING = 'pending';
}