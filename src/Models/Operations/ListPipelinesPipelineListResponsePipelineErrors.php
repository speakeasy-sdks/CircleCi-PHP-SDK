<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * ListPipelinesPipelineListResponsePipelineErrors - An error with a type and message.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class ListPipelinesPipelineListResponsePipelineErrors
{
    /**
     * A human-readable error message.
     * 
     * @var string $message
     */
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $message;
    
    /**
     * The type of error.
     * 
     * @var \CircleCi\Models\Operations\ListPipelinesPipelineListResponsePipelineErrorsType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<CircleCi\Models\Operations\ListPipelinesPipelineListResponsePipelineErrorsType>')]
    public ListPipelinesPipelineListResponsePipelineErrorsType $type;
    
	public function __construct()
	{
		$this->message = "";
		$this->type = \CircleCi\Models\Operations\ListPipelinesPipelineListResponsePipelineErrorsType::Config;
	}
}
