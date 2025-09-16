<?php

namespace saas\licenses;

class GetUsersInLicenseInputDTO implements \DTO {
    public \saas\License $license;
    public ?bool $leftUsers = null;
}
