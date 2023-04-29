<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * GetPipelineByNumberPipeline - A pipeline response.
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class GetPipelineByNumberPipeline
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
     * A sequence of errors that have occurred within the pipeline.
     * 
     * @var array<\CircleCi\Models\Operations\GetPipelineByNumberPipelineErrors> $errors
     */
	#[\JMS\Serializer\Annotation\SerializedName('errors')]
    #[\JMS\Serializer\Annotation\Type('array<CircleCi\Models\Operations\GetPipelineByNumberPipelineErrors>')]
    public array $errors;
    
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
     * The project-slug for the pipeline.
     * 
     * @var string $projectSlug
     */
	#[\JMS\Serializer\Annotation\SerializedName('project_slug')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $projectSlug;
    
    /**
     * The current state of the pipeline.
     * 
     * @var \CircleCi\Models\Operations\GetPipelineByNumberPipelineStateEnum $state
     */
	#[\JMS\Serializer\Annotation\SerializedName('state')]
    #[\JMS\Serializer\Annotation\Type('enum<CircleCi\Models\Operations\GetPipelineByNumberPipelineStateEnum>')]
    public GetPipelineByNumberPipelineStateEnum $state;
    
    /**
     * A summary of the trigger.
     * 
     * @var \CircleCi\Models\Operations\GetPipelineByNumberPipelineTrigger $trigger
     */
	#[\JMS\Serializer\Annotation\SerializedName('trigger')]
    #[\JMS\Serializer\Annotation\Type('CircleCi\Models\Operations\GetPipelineByNumberPipelineTrigger')]
    public GetPipelineByNumberPipelineTrigger $trigger;
    
    /**
     * $triggerParameters
     * 
     * @var ?array<string, mixed> $triggerParameters
     */
	#[\JMS\Serializer\Annotation\SerializedName('trigger_parameters')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $triggerParameters = null;
    
    /**
     * The date and time the pipeline was last updated.
     * 
     * @var ?\DateTime $updatedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
    /**
     * VCS information for the pipeline.
     * 
     * @var ?\CircleCi\Models\Operations\GetPipelineByNumberPipelineVcs $vcs
     */
	#[\JMS\Serializer\Annotation\SerializedName('vcs')]
    #[\JMS\Serializer\Annotation\Type('CircleCi\Models\Operations\GetPipelineByNumberPipelineVcs')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetPipelineByNumberPipelineVcs $vcs = null;
    
	public function __construct()
	{
		$this->createdAt = new \DateTime();
		$this->errors = [];
		$this->id = "";
		$this->number = 0;
		$this->projectSlug = "";
		$this->state = \CircleCi\Models\Operations\GetPipelineByNumberPipelineStateEnum::CREATED;
		$this->trigger = new \CircleCi\Models\Operations\GetPipelineByNumberPipelineTrigger();
		$this->triggerParameters = null;
		$this->updatedAt = null;
		$this->vcs = null;
	}
}