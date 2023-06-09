<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


class GetEnvVarResponse
{
	
    public string $contentType;
    
    /**
     * The environment variable.
     * 
     * @var ?\CircleCi\Models\Operations\GetEnvVarEnvironmentVariablePair $environmentVariablePair
     */
	
    public ?GetEnvVarEnvironmentVariablePair $environmentVariablePair = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Error response.
     * 
     * @var ?\CircleCi\Models\Operations\GetEnvVarDefaultApplicationJSON $getEnvVarDefaultApplicationJSONObject
     */
	
    public ?GetEnvVarDefaultApplicationJSON $getEnvVarDefaultApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->environmentVariablePair = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getEnvVarDefaultApplicationJSONObject = null;
	}
}
