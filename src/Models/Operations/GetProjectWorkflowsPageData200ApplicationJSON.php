<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


/**
 * GetProjectWorkflowsPageData200ApplicationJSON - Aggregated summary metrics and trends by workflow and branches
 * 
 * @package CircleCi\Models\Operations
 * @access public
 */
class GetProjectWorkflowsPageData200ApplicationJSON
{
    /**
     * A list of all the branches for a given project.
     * 
     * @var ?array<string> $allBranches
     */
	#[\JMS\Serializer\Annotation\SerializedName('all_branches')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $allBranches = null;
    
    /**
     * A list of all the workflows for a given project.
     * 
     * @var ?array<string> $allWorkflows
     */
	#[\JMS\Serializer\Annotation\SerializedName('all_workflows')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $allWorkflows = null;
    
    /**
     * The unique ID of the organization
     * 
     * @var mixed $orgId
     */
	#[\JMS\Serializer\Annotation\SerializedName('org_id')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $orgId = null;
    
    /**
     * Metrics and trends data aggregated for a given project.
     * 
     * @var ?\CircleCi\Models\Operations\GetProjectWorkflowsPageData200ApplicationJSONProjectData $projectData
     */
	#[\JMS\Serializer\Annotation\SerializedName('project_data')]
    #[\JMS\Serializer\Annotation\Type('CircleCi\Models\Operations\GetProjectWorkflowsPageData200ApplicationJSONProjectData')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetProjectWorkflowsPageData200ApplicationJSONProjectData $projectData = null;
    
    /**
     * The unique ID of the project
     * 
     * @var mixed $projectId
     */
	#[\JMS\Serializer\Annotation\SerializedName('project_id')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $projectId = null;
    
    /**
     * A list of metrics and trends data for branches for a given project.
     * 
     * @var ?array<\CircleCi\Models\Operations\GetProjectWorkflowsPageData200ApplicationJSONProjectWorkflowBranchData> $projectWorkflowBranchData
     */
	#[\JMS\Serializer\Annotation\SerializedName('project_workflow_branch_data')]
    #[\JMS\Serializer\Annotation\Type('array<CircleCi\Models\Operations\GetProjectWorkflowsPageData200ApplicationJSONProjectWorkflowBranchData>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $projectWorkflowBranchData = null;
    
    /**
     * A list of metrics and trends data for workflows for a given project.
     * 
     * @var ?array<\CircleCi\Models\Operations\GetProjectWorkflowsPageData200ApplicationJSONProjectWorkflowData> $projectWorkflowData
     */
	#[\JMS\Serializer\Annotation\SerializedName('project_workflow_data')]
    #[\JMS\Serializer\Annotation\Type('array<CircleCi\Models\Operations\GetProjectWorkflowsPageData200ApplicationJSONProjectWorkflowData>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $projectWorkflowData = null;
    
	public function __construct()
	{
		$this->allBranches = null;
		$this->allWorkflows = null;
		$this->orgId = null;
		$this->projectData = null;
		$this->projectId = null;
		$this->projectWorkflowBranchData = null;
		$this->projectWorkflowData = null;
	}
}
