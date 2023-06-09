<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


class CreateContextRequestBodyOwner1
{
    /**
     * The unique ID of the owner of the context. Specify either this or slug.
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * The type of the owner. Defaults to "organization". Accounts are only used as context owners in server.
     * 
     * @var ?\CircleCi\Models\Operations\CreateContextRequestBodyOwner1Type $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<CircleCi\Models\Operations\CreateContextRequestBodyOwner1Type>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CreateContextRequestBodyOwner1Type $type = null;
    
	public function __construct()
	{
		$this->id = "";
		$this->type = null;
	}
}
