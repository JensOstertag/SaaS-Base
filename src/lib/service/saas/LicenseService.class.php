<?php

namespace saas;

class LicenseService {
    public static function getLicenses(licenses\GetLicensesInputDTO $getLicensesInputDTO): licenses\GetLicensesOutputDTO {
        $useCase = new \saas\licenses\GetLicensesUC();
        return $useCase->execute($getLicensesInputDTO);
    }

    public function getUserLicense(licenses\GetUserLicenseInputDTO $getUserLicenseInputDTO): licenses\GetUserLicenseOutputDTO {
        $useCase = new \saas\licenses\GetUserLicenseUC();
        return $useCase->execute($getUserLicenseInputDTO);
    }

    public function getUsersInLicense(licenses\GetUsersInLicenseInputDTO $getUsersInLicenseInputDTO): licenses\GetUsersInLicenseOutputDTO {
        $useCase = new \saas\licenses\GetUsersInLicenseUC();
        return $useCase->execute($getUsersInLicenseInputDTO);
    }
}
