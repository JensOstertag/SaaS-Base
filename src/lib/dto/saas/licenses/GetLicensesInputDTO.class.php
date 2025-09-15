<?php

namespace saas\licenses;

class GetLicensesInputDTO implements \DTO {
    public ?bool $inactiveLicenses = null;
    public ?bool $licensesScheduledForCancellation = null;
}
