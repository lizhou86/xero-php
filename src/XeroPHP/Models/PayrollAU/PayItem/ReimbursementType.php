<?php

namespace XeroPHP\Models\PayrollAU\PayItem;

use XeroPHP\Remote;


class ReimbursementType extends Remote\Object {

    /**
     * Name of the reimbursement type (max length = 50)
     *
     * @property string Name
     */

    /**
     * See Accounts
     *
     * @property string AccountCode
     */

    /**
     * Xero identifier
     *
     * @property string ReimbursementTypeID
     */



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
        return 'ReimbursementType';
    }


    /*
    * Get the guid property
    *
    * @return string
    */
    public static function getGUIDProperty(){
        return 'ReimbursementTypeID';
    }


    /**
    * Get the stem of the API (core.xro) etc
    *
    * @return string|null
    */
    public static function getAPIStem(){
        return Remote\URL::API_PAYROLL;
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
            'Name' => array (true, self::PROPERTY_TYPE_STRING, null, false),
            'AccountCode' => array (true, self::PROPERTY_TYPE_STRING, null, false),
            'ReimbursementTypeID' => array (false, self::PROPERTY_TYPE_STRING, null, false)
        );
    }


    /**
     * @return string
     */
    public function getName(){
        return $this->_data['Name'];
    }

    /**
     * @param string $value
     * @return ReimbursementType
     */
    public function setName($value){
        $this->_dirty['Name'] = $this->_data['Name'] != $value;
        $this->_data['Name'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountCode(){
        return $this->_data['AccountCode'];
    }

    /**
     * @param string $value
     * @return ReimbursementType
     */
    public function setAccountCode($value){
        $this->_dirty['AccountCode'] = $this->_data['AccountCode'] != $value;
        $this->_data['AccountCode'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getReimbursementTypeID(){
        return $this->_data['ReimbursementTypeID'];
    }

    /**
     * @param string $value
     * @return ReimbursementType
     */
    public function setReimbursementTypeID($value){
        $this->_dirty['ReimbursementTypeID'] = $this->_data['ReimbursementTypeID'] != $value;
        $this->_data['ReimbursementTypeID'] = $value;
        return $this;
    }


}