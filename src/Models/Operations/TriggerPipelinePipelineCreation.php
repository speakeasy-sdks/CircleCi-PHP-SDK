<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * TriggerPipelinePipelineCreation - A pipeline creation response.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class TriggerPipelinePipelineCreation
{
    /**
     * The date and time the pipeline was created.
     * 
     * @var \DateTime $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    /**
     * The unique ID of the pipeline.
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * The number of the pipeline.
     * 
     * @var int $number
     */
	#[\JMS\Serializer\Annotation\SerializedName('number')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $number;
    
    /**
     * The current state of the pipeline.
     * 
     * @var \CircleCi\Models\Operations\TriggerPipelinePipelineCreationState $state
     */
	#[\JMS\Serializer\Annotation\SerializedName('state')]
    #[\JMS\Serializer\Annotation\Type('enum<CircleCi\Models\Operations\TriggerPipelinePipelineCreationState>')]
    public TriggerPipelinePipelineCreationState $state;
    
	public function __construct()
	{
		$this->createdAt = new \DateTime();
		$this->id = "";
		$this->number = 0;
		$this->state = \CircleCi\Models\Operations\TriggerPipelinePipelineCreationState::Created;
	}
}
