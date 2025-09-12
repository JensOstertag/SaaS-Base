<?php

namespace saas;

enum BillingCycle: int implements \struktal\ORM\ORMEnum {
    case MONTHLY = 1;
    case YEARLY = 2;
}
