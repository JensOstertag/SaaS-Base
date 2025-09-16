<?php

namespace saas\licenses;

class CancelLicenseUC implements \UC {
    public function execute(\DTO $input): CancelLicenseOutputDTO {
        if(!($input instanceof CancelLicenseInputDTO)) {
            throw new \IncorrectDTOException();
        }

        $output = new CancelLicenseOutputDTO();

        throw new \RuntimeException("Not implemented yet");
    }
}
