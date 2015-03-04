<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote;

use XeroPHP\Models\Accounting\Organisation\ExternalLink;
use XeroPHP\Models\Accounting\Organisation\PaymentTerm;

class Organisation extends Remote\Object {

    /**
     * Display a unique key used for Xero-to-Xero transactions
     *
     * @property string APIKey
     */

    /**
     * Display name of organisation shown in Xero
     *
     * @property string Name
     */

    /**
     * Organisation name shown on Reports
     *
     * @property string LegalName
     */

    /**
     * Boolean to describe if organisation is registered with a local tax authority i.e. true, false
     *
     * @property bool PaysTax
     */

    /**
     * See Version Types
     *
     * @property string Version
     */

    /**
     * Default currency for organisation. See ISO 4217 Currency Codes
     *
     * @property string BaseCurrency
     */

    /**
     * Country code for organisation. See ISO 3166-2 Country Codes
     *
     * @property string CountryCode
     */

    /**
     * Boolean to describe if organisation is a demo company.
     *
     * @property bool IsDemoCompany
     */

    /**
     * Will be set to ACTIVE if you can connect to organisation via the Xero API
     *
     * @property string OrganisationStatus
     */

    /**
     * Shows for New Zealand, Australian and UK organisations
     *
     * @property string RegistrationNumber
     */

    /**
     * Shown if set
     *
     * @property string TaxNumber
     */

    /**
     * Calendar day e.g. 0-31
     *
     * @property string FinancialYearEndDay
     */

    /**
     * Calendar Month e.g. 1-12
     *
     * @property string FinancialYearEndMonth
     */

    /**
     * The accounting basis used for tax returns. See Sales Tax Basis
     *
     * @property string SalesTaxBasis
     */

    /**
     * The frequency with which tax returns are processed. See Sales Tax Period
     *
     * @property string SalesTaxPeriod
     */

    /**
     * Shown if set. See lock dates
     *
     * @property string PeriodLockDate
     */

    /**
     * Shown if set. See lock dates
     *
     * @property string EndOfYearLockDate
     */

    /**
     * Timestamp when the organisation was created in Xero
     *
     * @property \DateTime CreatedDateUTC
     */

    /**
     * Organisation Type
     *
     * @property string OrganisationEntityType
     */

    /**
     * Timezone specifications
     *
     * @property string Timezone
     */

    /**
     * A unique identifier for the organisation. Potential uses.
     *
     * @property string ShortCode
     */

    /**
     * Description of business type as defined in Organisation settings
     *
     * @property string LineOfBusiness
     */

    /**
     * Address details for organisation – see Addresses
     *
     * @property Address[] Addresses
     */

    /**
     * Phones details for organisation – see Phones
     *
     * @property Phone[] Phones
     */

    /**
     * Organisation profile links for popular services such as Facebook, Twitter, GooglePlus and LinkedIn.
     * You can also add link to your website here. Shown if Organisation settings  is updated in Xero. See
     * ExternalLinks below
     *
     * @property ExternalLink[] ExternalLinks
     */

    /**
     * Default payment terms for the organisation if set – See Payment Terms below
     *
     * @property PaymentTerm[] PaymentTerms
     */


    const VERSION_TYPE_AU           = 'AU';
    const VERSION_TYPE_NZ           = 'NZ';
    const VERSION_TYPE_GLOBAL       = 'GLOBAL';
    const VERSION_TYPE_UK           = 'UK';
    const VERSION_TYPE_US           = 'US';
    const VERSION_TYPE_AUONRAMP     = 'AUONRAMP';
    const VERSION_TYPE_NZONRAMP     = 'NZONRAMP';
    const VERSION_TYPE_GLOBALONRAMP = 'GLOBALONRAMP';
    const VERSION_TYPE_UKONRAMP     = 'UKONRAMP';
    const VERSION_TYPE_USONRAMP     = 'USONRAMP';

    const ORGANISATION_TYPE_COMPANY     = 'COMPANY';
    const ORGANISATION_TYPE_CHARITY     = 'CHARITY';
    const ORGANISATION_TYPE_CLUBSOCIETY = 'CLUBSOCIETY';
    const ORGANISATION_TYPE_PARTNERSHIP = 'PARTNERSHIP';
    const ORGANISATION_TYPE_PRACTICE    = 'PRACTICE';
    const ORGANISATION_TYPE_PERSON      = 'PERSON';
    const ORGANISATION_TYPE_SOLETRADER  = 'SOLETRADER';
    const ORGANISATION_TYPE_TRUST       = 'TRUST';


    /*
    * Get the resource uri of the class (Contacts) etc
    *
    * @return string
    */
    public static function getResourceURI(){
        return null;
    }


    /*
    * Get the root node name.  Just the unqualified classname
    *
    * @return string
    */
    public static function getRootNodeName(){
        return 'Organisation';
    }


    /*
    * Get the guid property
    *
    * @return string
    */
    public static function getGUIDProperty(){
        return '';
    }


    /**
    * Get the stem of the API (core.xro) etc
    *
    * @return string|null
    */
    public static function getAPIStem(){
        return Remote\URL::API_CORE;
    }


    /*
    * Get the supported methods
    */
    public static function getSupportedMethods(){
        return array(
        );
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *
     * @return array
     */
    public static function getProperties(){
        return array(
            'APIKey' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'Name' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'LegalName' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'PaysTax' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false),
            'Version' => array (false, self::PROPERTY_TYPE_ENUM, null, false),
            'BaseCurrency' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'CountryCode' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'IsDemoCompany' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false),
            'OrganisationStatus' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'RegistrationNumber' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'TaxNumber' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'FinancialYearEndDay' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'FinancialYearEndMonth' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'SalesTaxBasis' => array (false, self::PROPERTY_TYPE_ENUM, null, false),
            'SalesTaxPeriod' => array (false, self::PROPERTY_TYPE_ENUM, null, false),
            'PeriodLockDate' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'EndOfYearLockDate' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'CreatedDateUTC' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false),
            'OrganisationEntityType' => array (false, self::PROPERTY_TYPE_ENUM, null, false),
            'Timezone' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'ShortCode' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'LineOfBusiness' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'Addresses' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Address', true),
            'Phones' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Phone', true),
            'ExternalLinks' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Organisation\\ExternalLink', true),
            'PaymentTerms' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Organisation\\PaymentTerm', true)
        );
    }


    /**
     * @return string
     */
    public function getAPIKey(){
        return $this->_data['APIKey'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setAPIKey($value){
        $this->propertyUpdated('APIKey', $value);
        $this->_data['APIKey'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(){
        return $this->_data['Name'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setName($value){
        $this->propertyUpdated('Name', $value);
        $this->_data['Name'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLegalName(){
        return $this->_data['LegalName'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setLegalName($value){
        $this->propertyUpdated('LegalName', $value);
        $this->_data['LegalName'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPaysTax(){
        return $this->_data['PaysTax'];
    }

    /**
     * @param bool $value
     * @return Organisation
     */
    public function setPaysTax($value){
        $this->propertyUpdated('PaysTax', $value);
        $this->_data['PaysTax'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(){
        return $this->_data['Version'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setVersion($value){
        $this->propertyUpdated('Version', $value);
        $this->_data['Version'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseCurrency(){
        return $this->_data['BaseCurrency'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setBaseCurrency($value){
        $this->propertyUpdated('BaseCurrency', $value);
        $this->_data['BaseCurrency'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode(){
        return $this->_data['CountryCode'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setCountryCode($value){
        $this->propertyUpdated('CountryCode', $value);
        $this->_data['CountryCode'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDemoCompany(){
        return $this->_data['IsDemoCompany'];
    }

    /**
     * @param bool $value
     * @return Organisation
     */
    public function setIsDemoCompany($value){
        $this->propertyUpdated('IsDemoCompany', $value);
        $this->_data['IsDemoCompany'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrganisationStatus(){
        return $this->_data['OrganisationStatus'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setOrganisationStatus($value){
        $this->propertyUpdated('OrganisationStatus', $value);
        $this->_data['OrganisationStatus'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegistrationNumber(){
        return $this->_data['RegistrationNumber'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setRegistrationNumber($value){
        $this->propertyUpdated('RegistrationNumber', $value);
        $this->_data['RegistrationNumber'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxNumber(){
        return $this->_data['TaxNumber'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setTaxNumber($value){
        $this->propertyUpdated('TaxNumber', $value);
        $this->_data['TaxNumber'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getFinancialYearEndDay(){
        return $this->_data['FinancialYearEndDay'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setFinancialYearEndDay($value){
        $this->propertyUpdated('FinancialYearEndDay', $value);
        $this->_data['FinancialYearEndDay'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getFinancialYearEndMonth(){
        return $this->_data['FinancialYearEndMonth'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setFinancialYearEndMonth($value){
        $this->propertyUpdated('FinancialYearEndMonth', $value);
        $this->_data['FinancialYearEndMonth'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesTaxBasis(){
        return $this->_data['SalesTaxBasis'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setSalesTaxBasis($value){
        $this->propertyUpdated('SalesTaxBasis', $value);
        $this->_data['SalesTaxBasis'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesTaxPeriod(){
        return $this->_data['SalesTaxPeriod'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setSalesTaxPeriod($value){
        $this->propertyUpdated('SalesTaxPeriod', $value);
        $this->_data['SalesTaxPeriod'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPeriodLockDate(){
        return $this->_data['PeriodLockDate'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setPeriodLockDate($value){
        $this->propertyUpdated('PeriodLockDate', $value);
        $this->_data['PeriodLockDate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndOfYearLockDate(){
        return $this->_data['EndOfYearLockDate'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setEndOfYearLockDate($value){
        $this->propertyUpdated('EndOfYearLockDate', $value);
        $this->_data['EndOfYearLockDate'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDateUTC(){
        return $this->_data['CreatedDateUTC'];
    }

    /**
     * @param \DateTime $value
     * @return Organisation
     */
    public function setCreatedDateUTC(\DateTime $value){
        $this->propertyUpdated('CreatedDateUTC', $value);
        $this->_data['CreatedDateUTC'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrganisationEntityType(){
        return $this->_data['OrganisationEntityType'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setOrganisationEntityType($value){
        $this->propertyUpdated('OrganisationEntityType', $value);
        $this->_data['OrganisationEntityType'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimezone(){
        return $this->_data['Timezone'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setTimezone($value){
        $this->propertyUpdated('Timezone', $value);
        $this->_data['Timezone'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortCode(){
        return $this->_data['ShortCode'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setShortCode($value){
        $this->propertyUpdated('ShortCode', $value);
        $this->_data['ShortCode'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLineOfBusiness(){
        return $this->_data['LineOfBusiness'];
    }

    /**
     * @param string $value
     * @return Organisation
     */
    public function setLineOfBusiness($value){
        $this->propertyUpdated('LineOfBusiness', $value);
        $this->_data['LineOfBusiness'] = $value;
        return $this;
    }

    /**
     * @return Address
     */
    public function getAddresses(){
        return $this->_data['Addresses'];
    }

    /**
     * @param Address[] $value
     * @return Organisation
     */
    public function addAddress(Address $value){
        $this->propertyUpdated('Addresses', $value);
        $this->_data['Addresses'][] = $value;
        return $this;
    }

    /**
     * @return Phone
     */
    public function getPhones(){
        return $this->_data['Phones'];
    }

    /**
     * @param Phone[] $value
     * @return Organisation
     */
    public function addPhone(Phone $value){
        $this->propertyUpdated('Phones', $value);
        $this->_data['Phones'][] = $value;
        return $this;
    }

    /**
     * @return ExternalLink
     */
    public function getExternalLinks(){
        return $this->_data['ExternalLinks'];
    }

    /**
     * @param ExternalLink[] $value
     * @return Organisation
     */
    public function addExternalLink(ExternalLink $value){
        $this->propertyUpdated('ExternalLinks', $value);
        $this->_data['ExternalLinks'][] = $value;
        return $this;
    }

    /**
     * @return PaymentTerm
     */
    public function getPaymentTerms(){
        return $this->_data['PaymentTerms'];
    }

    /**
     * @param PaymentTerm[] $value
     * @return Organisation
     */
    public function addPaymentTerm(PaymentTerm $value){
        $this->propertyUpdated('PaymentTerms', $value);
        $this->_data['PaymentTerms'][] = $value;
        return $this;
    }


}