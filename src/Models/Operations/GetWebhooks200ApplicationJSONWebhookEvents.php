<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


enum GetWebhooks200ApplicationJSONWebhookEvents: string
{
    case WorkflowCompleted = 'workflow-completed';
    case JobCompleted = 'job-completed';
}
