<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


class DeleteEnvironmentVariableFromContextResponse
{
	
    public string $contentType;
    
    /**
     * A confirmation message
     * 
     * @var ?\CircleCi\Models\Operations\DeleteEnvironmentVariableFromContextMessageResponse $messageResponse
     */
	
    public ?DeleteEnvironmentVariableFromContextMessageResponse $messageResponse = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Error response.
     * 
     * @var ?\CircleCi\Models\Operations\DeleteEnvironmentVariableFromContextDefaultApplicationJSON $deleteEnvironmentVariableFromContextDefaultApplicationJSONObject
     */
	
    public ?DeleteEnvironmentVariableFromContextDefaultApplicationJSON $deleteEnvironmentVariableFromContextDefaultApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->messageResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->deleteEnvironmentVariableFromContextDefaultApplicationJSONObject = null;
	}
}
