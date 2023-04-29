<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


class CreateContextResponse
{
	
    public string $contentType;
    
    /**
     * The new context
     * 
     * @var ?\CircleCi\Models\Operations\CreateContextContext $context
     */
	
    public ?CreateContextContext $context = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Error response.
     * 
     * @var ?\CircleCi\Models\Operations\CreateContextDefaultApplicationJSON $createContextDefaultApplicationJSONObject
     */
	
    public ?CreateContextDefaultApplicationJSON $createContextDefaultApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->context = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->createContextDefaultApplicationJSONObject = null;
	}
}