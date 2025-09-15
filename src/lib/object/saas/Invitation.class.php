<?php

namespace saas;

class Invitation extends \struktal\ORM\GenericEntity {
    public ?string $email = null;
    public ?string $token = null;
    public ?License $license = null;
    public ?\User $invitor = null;
    public ?\User $invitee = null;
    public ?\DateTimeImmutable $invited = null;
    public ?\DateTimeImmutable $answered = null;
    public ?bool $accepted = null;
}
