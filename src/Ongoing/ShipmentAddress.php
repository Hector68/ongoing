<?php

namespace Ongoing;

class ShipmentAddress
{

    /**
     * @var ShipmentAddressIdentification $ShipmentAddressIdentification
     */
    protected $ShipmentAddressIdentification = null;

    /**
     * @var ShipmentAddressOperation $ShipmentAddressOperation
     */
    protected $ShipmentAddressOperation = null;

    /**
     * @var int $AddressSequenceNumber
     */
    protected $AddressSequenceNumber = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $Address3
     */
    protected $Address3 = null;

    /**
     * @var string $PostCode
     */
    protected $PostCode = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var boolean $IsEuCountry
     */
    protected $IsEuCountry = null;

    /**
     * @var string $TelePhone
     */
    protected $TelePhone = null;

    /**
     * @var string $MobilePhone
     */
    protected $MobilePhone = null;

    /**
     * @var string $Remark
     */
    protected $Remark = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $DeliveryInstruction
     */
    protected $DeliveryInstruction = null;

    /**
     * @var boolean $NotifyByEmail
     */
    protected $NotifyByEmail = null;

    /**
     * @var boolean $NotifyBySms
     */
    protected $NotifyBySms = null;

    /**
     * @var boolean $NotifyByTelephone
     */
    protected $NotifyByTelephone = null;

    /**
     * @var int $AddressId
     */
    protected $AddressId = null;

    /**
     * @param ShipmentAddressIdentification $ShipmentAddressIdentification
     * @param ShipmentAddressOperation $ShipmentAddressOperation
     * @param int $AddressSequenceNumber
     * @param int $Id
     * @param boolean $IsEuCountry
     * @param boolean $NotifyByEmail
     * @param boolean $NotifyBySms
     */
    public function __construct($ShipmentAddressIdentification, $ShipmentAddressOperation, $AddressSequenceNumber, $Id, $IsEuCountry, $NotifyByEmail, $NotifyBySms)
    {
      $this->ShipmentAddressIdentification = $ShipmentAddressIdentification;
      $this->ShipmentAddressOperation = $ShipmentAddressOperation;
      $this->AddressSequenceNumber = $AddressSequenceNumber;
      $this->Id = $Id;
      $this->IsEuCountry = $IsEuCountry;
      $this->NotifyByEmail = $NotifyByEmail;
      $this->NotifyBySms = $NotifyBySms;
    }

    /**
     * @return ShipmentAddressIdentification
     */
    public function getShipmentAddressIdentification()
    {
      return $this->ShipmentAddressIdentification;
    }

    /**
     * @param ShipmentAddressIdentification $ShipmentAddressIdentification
     * @return \Ongoing\ShipmentAddress
     */
    public function setShipmentAddressIdentification($ShipmentAddressIdentification)
    {
      $this->ShipmentAddressIdentification = $ShipmentAddressIdentification;
      return $this;
    }

    /**
     * @return ShipmentAddressOperation
     */
    public function getShipmentAddressOperation()
    {
      return $this->ShipmentAddressOperation;
    }

    /**
     * @param ShipmentAddressOperation $ShipmentAddressOperation
     * @return \Ongoing\ShipmentAddress
     */
    public function setShipmentAddressOperation($ShipmentAddressOperation)
    {
      $this->ShipmentAddressOperation = $ShipmentAddressOperation;
      return $this;
    }

    /**
     * @return int
     */
    public function getAddressSequenceNumber()
    {
      return $this->AddressSequenceNumber;
    }

    /**
     * @param int $AddressSequenceNumber
     * @return \Ongoing\ShipmentAddress
     */
    public function setAddressSequenceNumber($AddressSequenceNumber)
    {
      $this->AddressSequenceNumber = $AddressSequenceNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Ongoing\ShipmentAddress
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Ongoing\ShipmentAddress
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return \Ongoing\ShipmentAddress
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
      return $this->Address2;
    }

    /**
     * @param string $Address2
     * @return \Ongoing\ShipmentAddress
     */
    public function setAddress2($Address2)
    {
      $this->Address2 = $Address2;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress3()
    {
      return $this->Address3;
    }

    /**
     * @param string $Address3
     * @return \Ongoing\ShipmentAddress
     */
    public function setAddress3($Address3)
    {
      $this->Address3 = $Address3;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
      return $this->PostCode;
    }

    /**
     * @param string $PostCode
     * @return \Ongoing\ShipmentAddress
     */
    public function setPostCode($PostCode)
    {
      $this->PostCode = $PostCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \Ongoing\ShipmentAddress
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \Ongoing\ShipmentAddress
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEuCountry()
    {
      return $this->IsEuCountry;
    }

    /**
     * @param boolean $IsEuCountry
     * @return \Ongoing\ShipmentAddress
     */
    public function setIsEuCountry($IsEuCountry)
    {
      $this->IsEuCountry = $IsEuCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getTelePhone()
    {
      return $this->TelePhone;
    }

    /**
     * @param string $TelePhone
     * @return \Ongoing\ShipmentAddress
     */
    public function setTelePhone($TelePhone)
    {
      $this->TelePhone = $TelePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
      return $this->MobilePhone;
    }

    /**
     * @param string $MobilePhone
     * @return \Ongoing\ShipmentAddress
     */
    public function setMobilePhone($MobilePhone)
    {
      $this->MobilePhone = $MobilePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param string $Remark
     * @return \Ongoing\ShipmentAddress
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \Ongoing\ShipmentAddress
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryInstruction()
    {
      return $this->DeliveryInstruction;
    }

    /**
     * @param string $DeliveryInstruction
     * @return \Ongoing\ShipmentAddress
     */
    public function setDeliveryInstruction($DeliveryInstruction)
    {
      $this->DeliveryInstruction = $DeliveryInstruction;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNotifyByEmail()
    {
      return $this->NotifyByEmail;
    }

    /**
     * @param boolean $NotifyByEmail
     * @return \Ongoing\ShipmentAddress
     */
    public function setNotifyByEmail($NotifyByEmail)
    {
      $this->NotifyByEmail = $NotifyByEmail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNotifyBySms()
    {
      return $this->NotifyBySms;
    }

    /**
     * @param boolean $NotifyBySms
     * @return \Ongoing\ShipmentAddress
     */
    public function setNotifyBySms($NotifyBySms)
    {
      $this->NotifyBySms = $NotifyBySms;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNotifyByTelephone()
    {
      return $this->NotifyByTelephone;
    }

    /**
     * @param boolean $NotifyByTelephone
     * @return \Ongoing\ShipmentAddress
     */
    public function setNotifyByTelephone($NotifyByTelephone)
    {
      $this->NotifyByTelephone = $NotifyByTelephone;
      return $this;
    }

    /**
     * @return int
     */
    public function getAddressId()
    {
      return $this->AddressId;
    }

    /**
     * @param int $AddressId
     * @return \Ongoing\ShipmentAddress
     */
    public function setAddressId($AddressId)
    {
      $this->AddressId = $AddressId;
      return $this;
    }

}
