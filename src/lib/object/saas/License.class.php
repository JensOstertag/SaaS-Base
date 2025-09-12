<?php

namespace saas;

class License extends \struktal\ORM\GenericEntity {
    public ?Plan $plan = null;
    public bool $cancelled = false;
    public ?\DateTimeImmutable $lastBilled = null;
}
