<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


class GetWorkflowSummaryResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Metrics and trends for a workflow
     * 
     * @var ?\CircleCi\Models\Operations\GetWorkflowSummary200ApplicationJSON $getWorkflowSummary200ApplicationJSONObject
     */
	
    public ?GetWorkflowSummary200ApplicationJSON $getWorkflowSummary200ApplicationJSONObject = null;
    
    /**
     * Error response.
     * 
     * @var ?\CircleCi\Models\Operations\GetWorkflowSummaryDefaultApplicationJSON $getWorkflowSummaryDefaultApplicationJSONObject
     */
	
    public ?GetWorkflowSummaryDefaultApplicationJSON $getWorkflowSummaryDefaultApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getWorkflowSummary200ApplicationJSONObject = null;
		$this->getWorkflowSummaryDefaultApplicationJSONObject = null;
	}
}