<?php

namespace saas;

class Plan extends \struktal\ORM\GenericEntity {
    public ?string $name = null;
    public ?BillingCycle $billingCycle = null;
    public ?float $pricePerUser = null;
    public ?float $basePrice = null;
    public ?int $userLimit = null;
    public ?bool $bookable = null;
}
