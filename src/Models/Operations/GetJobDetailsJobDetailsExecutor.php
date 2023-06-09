<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * GetJobDetailsJobDetailsExecutor - Information about executor used for a job.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class GetJobDetailsJobDetailsExecutor
{
    /**
     * Resource class name.
     * 
     * @var string $resourceClass
     */
	#[\JMS\Serializer\Annotation\SerializedName('resource_class')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $resourceClass;
    
    /**
     * Executor type.
     * 
     * @var ?string $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $type = null;
    
	public function __construct()
	{
		$this->resourceClass = "";
		$this->type = null;
	}
}
