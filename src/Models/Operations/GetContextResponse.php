<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


class GetContextResponse
{
	
    public string $contentType;
    
    /**
     * The context
     * 
     * @var ?\CircleCi\Models\Operations\GetContextContext $context
     */
	
    public ?GetContextContext $context = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Error response.
     * 
     * @var ?\CircleCi\Models\Operations\GetContextDefaultApplicationJSON $getContextDefaultApplicationJSONObject
     */
	
    public ?GetContextDefaultApplicationJSON $getContextDefaultApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->context = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getContextDefaultApplicationJSONObject = null;
	}
}
