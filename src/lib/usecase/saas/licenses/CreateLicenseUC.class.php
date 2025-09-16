<?php

namespace saas\licenses;

class CreateLicenseUC implements \UC {
    public function execute(\DTO $input): CreateLicenseOutputDTO {
        if(!($input instanceof CreateLicenseInputDTO)) {
            throw new \IncorrectDTOException();
        }

        $output = new CreateLicenseOutputDTO();

        throw new \RuntimeException("Not implemented yet");
    }
}
