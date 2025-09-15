<?php

namespace saas;

use struktal\ORM\GenericEntity;
use struktal\ORM\RelationshipType;

class UserInLicense extends \struktal\ORM\GenericRelationship {
    private static RelationshipType $relationshipType = RelationshipType::ONE_TO_ONE;

    public ?\User $producer = null;
    public ?License $consumer = null;
    public ?\DateTimeImmutable $joined = null;
    public ?\DateTimeImmutable $left = null;
    public bool $managesLicense = false;
    public bool $leaveOnNextRenewal = false;

    public function getProducer(): \User {
        return $this->producer;
    }

    public function setProducer(GenericEntity $producer): void {
        if(!$producer instanceof \User) {
            throw new \InvalidArgumentException("Producer must be an instance of User");
        }

        $this->producer = $producer;
    }

    public function getConsumer(): License {
        return $this->consumer;
    }

    public function setConsumer(GenericEntity $consumer): void {
        if(!$consumer instanceof License) {
            throw new \InvalidArgumentException("Consumer must be an instance of License");
        }

        $this->consumer = $consumer;
    }
}
