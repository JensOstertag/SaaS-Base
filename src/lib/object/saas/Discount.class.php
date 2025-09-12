<?php

namespace saas;

class Discount extends \struktal\ORM\GenericEntity {
    public ?string $description = null;
    public ?string $code = null;
    public ?float $percentage = null;
    public ?\DateTimeImmutable $validFrom = null;
    public ?\DateTimeImmutable $validUntil = null;
    public ?int $durationMonths = null;
    public ?int $maxRedemptions = null;
    public ?bool $newCustomers = null;
    public ?bool $existingCustomers = null;
    public ?bool $singlePlans = null;
    public ?bool $groupPlans = null;
}
