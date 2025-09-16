<?php

namespace saas\licenses;

class UpgradeLicenseUC implements \UC {
    public function execute(\DTO $input): UpgradeLicenseOutputDTO {
        if(!($input instanceof UpgradeLicenseInputDTO)) {
            throw new \IncorrectDTOException();
        }

        $output = new UpgradeLicenseOutputDTO();

        throw new \RuntimeException("Not implemented yet");
    }
}
