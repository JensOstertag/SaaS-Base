<?php

namespace saas;

class LicenseService {
    public static function getLicenses(licenses\GetLicensesInputDTO $getLicensesInputDTO): licenses\GetLicensesOutputDTO {
        $useCase = new \saas\licenses\GetLicensesUC();
        return $useCase->execute($getLicensesInputDTO);
    }

    public static function getUserLicense(licenses\GetUserLicenseInputDTO $getUserLicenseInputDTO): licenses\GetUserLicenseOutputDTO {
        $useCase = new \saas\licenses\GetUserLicenseUC();
        return $useCase->execute($getUserLicenseInputDTO);
    }

    public static function getUsersInLicense(licenses\GetUsersInLicenseInputDTO $getUsersInLicenseInputDTO): licenses\GetUsersInLicenseOutputDTO {
        $useCase = new \saas\licenses\GetUsersInLicenseUC();
        return $useCase->execute($getUsersInLicenseInputDTO);
    }

    public static function createLicense(licenses\CreateLicenseInputDTO $createLicenseInputDTO): licenses\CreateLicenseOutputDTO {
        $useCase = new \saas\licenses\CreateLicenseUC();
        return $useCase->execute($createLicenseInputDTO);
    }

    public static function upgradeLicense(licenses\UpgradeLicenseInputDTO $upgradeLicenseInputDTO): licenses\UpgradeLicenseOutputDTO {
        $useCase = new \saas\licenses\UpgradeLicenseUC();
        return $useCase->execute($upgradeLicenseInputDTO);
    }

    public static function downgradeLicense(licenses\DowngradeLicenseInputDTO $downgradeLicenseInputDTO): licenses\DowngradeLicenseOutputDTO {
        $useCase = new \saas\licenses\DowngradeLicenseUC();
        return $useCase->execute($downgradeLicenseInputDTO);
    }

    public static function cancelLicense(licenses\CancelLicenseInputDTO $cancelLicenseInputDTO): licenses\CancelLicenseOutputDTO {
        $useCase = new \saas\licenses\CancelLicenseUC();
        return $useCase->execute($cancelLicenseInputDTO);
    }

    public static function addUserToLicense(licenses\AddUserToLicenseInputDTO $addUserToLicenseInputDTO): licenses\AddUserToLicenseOutputDTO {
        $useCase = new \saas\licenses\AddUserToLicenseUC();
        return $useCase->execute($addUserToLicenseInputDTO);
    }

    public static function removeUserFromLicense(licenses\RemoveUserFromLicenseInputDTO $removeUserFromLicenseInputDTO): licenses\RemoveUserFromLicenseOutputDTO {
        $useCase = new \saas\licenses\RemoveUserFromLicenseUC();
        return $useCase->execute($removeUserFromLicenseInputDTO);
    }

    public static function setLicenseManager(licenses\SetLicenseManagerInputDTO $setLicenseManagerInputDTO): licenses\SetLicenseManagerOutputDTO {
        $useCase = new \saas\licenses\SetLicenseManagerUC();
        return $useCase->execute($setLicenseManagerInputDTO);
    }
}
