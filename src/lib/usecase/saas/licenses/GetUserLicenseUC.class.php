<?php

namespace saas\licenses;

class GetUserLicenseUC implements \UC {
    public function execute(\DTO $input): GetUserLicenseOutputDTO {
        if(!($input instanceof GetUserLicenseInputDTO)) {
            throw new \IncorrectDTOException();
        }

        $output = new GetUserLicenseOutputDTO();
        $output->license = null;

        $filter = [
            "user" => $input->user,
            new \struktal\ORM\DAOFilter(
                \struktal\ORM\DAOFilterOperator::LESS_THAN_EQUALS,
                "joined",
                new \DateTimeImmutable()
            ),
            "left" => null
        ];

        $license = \saas\License::dao()->getObject($filter);
        if($license instanceof \saas\License) {
            $output->license = $license;
        }

        return $output;
    }
}
