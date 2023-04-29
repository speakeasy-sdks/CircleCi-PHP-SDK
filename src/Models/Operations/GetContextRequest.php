<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;

use \CircleCi\Utils\SpeakeasyMetadata;
class GetContextRequest
{
    /**
     * ID of the context (UUID)
     * 
     * @var string $contextId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=context-id')]
    public string $contextId;
    
	public function __construct()
	{
		$this->contextId = "";
	}
}