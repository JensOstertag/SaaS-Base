<?php

namespace saas\licenses;

class GetLicensesUseCase implements \UC {
    public function execute(\DTO $input): GetLicensesOutputDTO {
        if(!($input instanceof GetLicensesInputDTO)) {
            throw new \IncorrectDTOException();
        }

        $output = new GetLicensesOutputDTO();

        $filter = [];
        if($input->inactiveLicenses !== null) {
            if($input->inactiveLicenses) {
                $filter[] = new \struktal\ORM\DAOFilter(
                    \struktal\ORM\DAOFilterOperator::LESS_THAN_EQUALS,
                    "cancellation",
                    new \DateTimeImmutable()
                );
            } else {
                $filter["cancellation"] = null;
            }
        }
        if($input->licensesScheduledForCancellation !== null) {
            if($input->licensesScheduledForCancellation) {
                $filter["cancelOnNextRenewal"] = true;
            } else {
                $filter["cancelOnNextRenewal"] = false;
            }
        }

        $licenses = \saas\License::dao()->getObjects($filter);
        $output->licenses = $licenses;

        return $output;
    }
}
