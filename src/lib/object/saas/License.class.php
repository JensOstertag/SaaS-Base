<?php

namespace saas;

class License extends \struktal\ORM\GenericEntity {
    public ?Plan $plan = null;
    public ?\DateTimeImmutable $activation = null;
    public ?\DateTimeImmutable $cancellation = null;
    public ?\DateTimeImmutable $lastRenewal = null;
    public bool $cancelOnNextRenewal = false;
}
