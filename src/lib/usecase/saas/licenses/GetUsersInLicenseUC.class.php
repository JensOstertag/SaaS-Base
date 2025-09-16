<?php

namespace saas\licenses;

class GetUsersInLicenseUC implements \UC {
    public function execute(\DTO $input): GetUsersInLicenseOutputDTO {
        if(!($input instanceof GetUsersInLicenseInputDTO)) {
            throw new \IncorrectDTOException();
        }

        $output = new GetUsersInLicenseOutputDTO();
        $output->users = [];

        $filter = [];
        $filter["consumer"] = $input->license;
        if($input->leftUsers !== null) {
            if($input->leftUsers) {
                $filter[] = new \struktal\ORM\DAOFilter(
                    \struktal\ORM\DAOFilterOperator::LESS_THAN_EQUALS,
                    "left",
                    new \DateTimeImmutable()
                );
            } else {
                $filter["left"] = null;
            }
        }

        $usersInLicense = \saas\UserInLicense::dao()->getObjects($filter);
        foreach($usersInLicense as $userInLicense) {
            if($userInLicense instanceof \saas\UserInLicense) {
                $output->users[] = $userInLicense->getProducer();
            }
        }

        return $output;
    }
}
