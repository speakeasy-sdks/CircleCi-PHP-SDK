<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;

use \CircleCi\Utils\SpeakeasyMetadata;
class GetWebhooksRequest
{
    /**
     * ID of the scope being used (at the moment, only project ID is supported)
     * 
     * @var string $scopeId
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=scope-id')]
    public string $scopeId;
    
    /**
     * Type of the scope being used
     * 
     * @var \CircleCi\Models\Operations\GetWebhooksScopeType $scopeType
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=scope-type')]
    public GetWebhooksScopeType $scopeType;
    
	public function __construct()
	{
		$this->scopeId = "";
		$this->scopeType = \CircleCi\Models\Operations\GetWebhooksScopeType::Project;
	}
}
