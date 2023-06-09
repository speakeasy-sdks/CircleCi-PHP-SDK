<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;

use \CircleCi\Utils\SpeakeasyMetadata;
class DeleteEnvVarRequest
{
    /**
     * The name of the environment variable.
     * 
     * @var string $name
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=name')]
    public string $name;
    
    /**
     * Project slug in the form `vcs-slug/org-name/repo-name`. The `/` characters may be URL-escaped.
     * 
     * @var string $projectSlug
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=project-slug')]
    public string $projectSlug;
    
	public function __construct()
	{
		$this->name = "";
		$this->projectSlug = "";
	}
}
