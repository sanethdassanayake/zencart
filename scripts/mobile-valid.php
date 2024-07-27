<?php
require '../vendor/autoload.php';

use libphonenumber\PhoneNumberUtil;
use libphonenumber\PhoneNumberFormat;
use libphonenumber\NumberParseException;

class PhoneNumberHandler {
    private $mobile;
    private $countryCode;
    private $phoneNumberUtil;

    public function __construct($mobile, $countryCode) {
        $this->mobile = $mobile;
        $this->countryCode = $countryCode;
        $this->phoneNumberUtil = PhoneNumberUtil::getInstance();
    }

    public function processPhoneNumber() {
        try {
            $number = $this->phoneNumberUtil->parse($this->mobile, $this->countryCode);

            if ($this->phoneNumberUtil->isValidNumber($number)) {
                $formattedNumber = $this->phoneNumberUtil->format($number, PhoneNumberFormat::E164);
                return $formattedNumber;
            } else {
                return "Invalid";
            }
        } catch (NumberParseException $e) {
            return "NumberParseException: " . $e->getMessage();
        }
    }
}