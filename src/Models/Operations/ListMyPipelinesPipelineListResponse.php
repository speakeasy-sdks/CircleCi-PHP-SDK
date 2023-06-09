<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * ListMyPipelinesPipelineListResponse - List of pipelines
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class ListMyPipelinesPipelineListResponse
{
    /**
     * $items
     * 
     * @var array<\CircleCi\Models\Operations\ListMyPipelinesPipelineListResponsePipeline> $items
     */
	#[\JMS\Serializer\Annotation\SerializedName('items')]
    #[\JMS\Serializer\Annotation\Type('array<CircleCi\Models\Operations\ListMyPipelinesPipelineListResponsePipeline>')]
    public array $items;
    
    /**
     * A token to pass as a `page-token` query parameter to return the next page of results.
     * 
     * @var string $nextPageToken
     */
	#[\JMS\Serializer\Annotation\SerializedName('next_page_token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $nextPageToken;
    
	public function __construct()
	{
		$this->items = [];
		$this->nextPageToken = "";
	}
}
