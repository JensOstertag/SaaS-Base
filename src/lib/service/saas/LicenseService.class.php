<?php

namespace saas;

class LicenseService {
    public static function getLicenses(licenses\GetLicensesInputDTO $getLicensesInputDTO): licenses\GetLicensesOutputDTO {
        $useCase = new \saas\licenses\GetLicensesUseCase();
    }
}
