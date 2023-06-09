<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


class GetProjectWorkflowsPageDataResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Aggregated summary metrics and trends by workflow and branches
     * 
     * @var ?\CircleCi\Models\Operations\GetProjectWorkflowsPageData200ApplicationJSON $getProjectWorkflowsPageData200ApplicationJSONObject
     */
	
    public ?GetProjectWorkflowsPageData200ApplicationJSON $getProjectWorkflowsPageData200ApplicationJSONObject = null;
    
    /**
     * Error response.
     * 
     * @var ?\CircleCi\Models\Operations\GetProjectWorkflowsPageDataDefaultApplicationJSON $getProjectWorkflowsPageDataDefaultApplicationJSONObject
     */
	
    public ?GetProjectWorkflowsPageDataDefaultApplicationJSON $getProjectWorkflowsPageDataDefaultApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getProjectWorkflowsPageData200ApplicationJSONObject = null;
		$this->getProjectWorkflowsPageDataDefaultApplicationJSONObject = null;
	}
}
