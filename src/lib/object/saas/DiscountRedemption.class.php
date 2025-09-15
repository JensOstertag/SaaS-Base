<?php

namespace saas;

use struktal\ORM\GenericEntity;
use struktal\ORM\RelationshipType;

class DiscountRedemption extends \struktal\ORM\GenericRelationship {
    private static RelationshipType $relationshipType = RelationshipType::ONE_TO_MANY;

    public ?Discount $producer = null;
    public ?License $consumer = null;
    public ?\DateTimeImmutable $redemption = null;

    public function getProducer(): Discount {
        return $this->producer;
    }

    public function setProducer(GenericEntity $producer): void {
        if(!$producer instanceof Discount) {
            throw new \InvalidArgumentException("Producer must be an instance of Discount");
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
