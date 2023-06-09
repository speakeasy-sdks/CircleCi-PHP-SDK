<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;

use \CircleCi\Utils\SpeakeasyMetadata;
class GetOrgSummaryDataRequest
{
    /**
     * Org slug in the form `vcs-slug/org-name`. The `/` characters may be URL-escaped.
     * 
     * @var string $orgSlug
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=org-slug')]
    public string $orgSlug;
    
    /**
     * List of project names.
     * 
     * @var ?\CircleCi\Models\Operations\GetOrgSummaryDataProjectNames $projectNames
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=project-names')]
    public ?GetOrgSummaryDataProjectNames $projectNames = null;
    
    /**
     * The time window used to calculate summary metrics.
     * 
     * @var ?\CircleCi\Models\Operations\GetOrgSummaryDataReportingWindow $reportingWindow
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=reporting-window')]
    public ?GetOrgSummaryDataReportingWindow $reportingWindow = null;
    
	public function __construct()
	{
		$this->orgSlug = "";
		$this->projectNames = null;
		$this->reportingWindow = null;
	}
}
