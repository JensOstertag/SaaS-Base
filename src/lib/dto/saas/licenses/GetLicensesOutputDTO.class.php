<?php

namespace saas\licenses;

class GetLicensesOutputDTO implements \DTO {
    /** @var \saas\License[] $licenses */
    public array $licenses = [];
}
