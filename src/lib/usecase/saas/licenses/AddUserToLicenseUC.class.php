<?php

namespace saas\licenses;

class AddUserToLicenseUC implements \UC {
    public function execute(\DTO $input): AddUserToLicenseOutputDTO {
        if(!($input instanceof AddUserToLicenseInputDTO)) {
            throw new \IncorrectDTOException();
        }

        $output = new AddUserToLicenseOutputDTO();

        throw new \RuntimeException("Not implemented yet");
    }
}
