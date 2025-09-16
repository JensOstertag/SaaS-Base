<?php

namespace saas\licenses;

class RemoveUserFromLicenseUC implements \UC {
    public function execute(\DTO $input): RemoveUserFromLicenseOutputDTO {
        if(!($input instanceof RemoveUserFromLicenseInputDTO)) {
            throw new \IncorrectDTOException();
        }

        $output = new RemoveUserFromLicenseOutputDTO();

        throw new \RuntimeException("Not implemented yet");
    }
}
