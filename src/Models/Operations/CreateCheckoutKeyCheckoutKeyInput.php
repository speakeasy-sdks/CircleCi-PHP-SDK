<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace CircleCi\Models\Operations;


class CreateCheckoutKeyCheckoutKeyInput
{
    /**
     * The type of checkout key to create. This may be either `deploy-key` or `user-key`.
     * 
     * @var \CircleCi\Models\Operations\CreateCheckoutKeyCheckoutKeyInputCheckoutKeyInputType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<CircleCi\Models\Operations\CreateCheckoutKeyCheckoutKeyInputCheckoutKeyInputType>')]
    public CreateCheckoutKeyCheckoutKeyInputCheckoutKeyInputType $type;
    
	public function __construct()
	{
		$this->type = \CircleCi\Models\Operations\CreateCheckoutKeyCheckoutKeyInputCheckoutKeyInputType::UserKey;
	}
}
