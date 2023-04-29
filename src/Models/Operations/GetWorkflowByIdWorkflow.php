<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * GetWorkflowByIdWorkflow - A workflow
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class GetWorkflowByIdWorkflow
{
	#[\JMS\Serializer\Annotation\SerializedName('canceled_by')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $canceledBy = null;
    
    /**
     * The date and time the workflow was created.
     * 
     * @var \DateTime $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('errored_by')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $erroredBy = null;
    
    /**
     * The unique ID of the workflow.
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * The name of the workflow.
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * The ID of the pipeline this workflow belongs to.
     * 
     * @var string $pipelineId
     */
	#[\JMS\Serializer\Annotation\SerializedName('pipeline_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $pipelineId;
    
    /**
     * The number of the pipeline this workflow belongs to.
     * 
     * @var int $pipelineNumber
     */
	#[\JMS\Serializer\Annotation\SerializedName('pipeline_number')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $pipelineNumber;
    
    /**
     * The project-slug for the pipeline this workflow belongs to.
     * 
     * @var string $projectSlug
     */
	#[\JMS\Serializer\Annotation\SerializedName('project_slug')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $projectSlug;
    
	#[\JMS\Serializer\Annotation\SerializedName('started_by')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $startedBy;
    
    /**
     * The current status of the workflow.
     * 
     * @var \CircleCi\Models\Operations\GetWorkflowByIdWorkflowStatusEnum $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<CircleCi\Models\Operations\GetWorkflowByIdWorkflowStatusEnum>')]
    public GetWorkflowByIdWorkflowStatusEnum $status;
    
    /**
     * The date and time the workflow stopped.
     * 
     * @var \DateTime $stoppedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('stopped_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $stoppedAt;
    
    /**
     * Tag used for the workflow
     * 
     * @var ?\CircleCi\Models\Operations\GetWorkflowByIdWorkflowTagEnum $tag
     */
	#[\JMS\Serializer\Annotation\SerializedName('tag')]
    #[\JMS\Serializer\Annotation\Type('enum<CircleCi\Models\Operations\GetWorkflowByIdWorkflowTagEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetWorkflowByIdWorkflowTagEnum $tag = null;
    
	public function __construct()
	{
		$this->canceledBy = null;
		$this->createdAt = new \DateTime();
		$this->erroredBy = null;
		$this->id = "";
		$this->name = "";
		$this->pipelineId = "";
		$this->pipelineNumber = 0;
		$this->projectSlug = "";
		$this->startedBy = "";
		$this->status = \CircleCi\Models\Operations\GetWorkflowByIdWorkflowStatusEnum::SUCCESS;
		$this->stoppedAt = new \DateTime();
		$this->tag = null;
	}
}