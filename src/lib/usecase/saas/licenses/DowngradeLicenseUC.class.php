<?php

namespace saas\licenses;

class DowngradeLicenseUC implements \UC {
    public function execute(\DTO $input): DowngradeLicenseOutputDTO {
        if(!($input instanceof DowngradeLicenseInputDTO)) {
            throw new \IncorrectDTOException();
        }

        $output = new DowngradeLicenseOutputDTO();

        throw new \RuntimeException("Not implemented yet");
    }
}
