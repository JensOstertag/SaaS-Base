<?php

enum PermissionLevel: int implements \struktal\Auth\PermissionLevel {
    case NEW_USER = 0;
    case USER = 1;
    case LICENSE_MANAGER = 2;
    case ADMIN = 100;

    public function value(): int {
        return $this->value;
    }
}
