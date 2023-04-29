<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


class ListContextsResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * A paginated list of contexts
     * 
     * @var ?\CircleCi\Models\Operations\ListContexts200ApplicationJSON $listContexts200ApplicationJSONObject
     */
	
    public ?ListContexts200ApplicationJSON $listContexts200ApplicationJSONObject = null;
    
    /**
     * Error response.
     * 
     * @var ?\CircleCi\Models\Operations\ListContextsDefaultApplicationJSON $listContextsDefaultApplicationJSONObject
     */
	
    public ?ListContextsDefaultApplicationJSON $listContextsDefaultApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->listContexts200ApplicationJSONObject = null;
		$this->listContextsDefaultApplicationJSONObject = null;
	}
}