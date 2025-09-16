<?php

namespace saas\licenses;

class SetLicenseManagerUC implements \UC {
    public function execute(\DTO $input): SetLicenseManagerOutputDTO {
        if(!($input instanceof SetLicenseManagerInputDTO)) {
            throw new \IncorrectDTOException();
        }

        $output = new SetLicenseManagerOutputDTO();

        throw new \RuntimeException("Not implemented yet");
    }
}
