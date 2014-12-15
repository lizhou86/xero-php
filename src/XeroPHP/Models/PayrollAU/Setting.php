<?php

namespace XeroPHP\Models\PayrollAU;

use XeroPHP\Remote;

use XeroPHP\Models\PayrollAU\Setting\Account;
use XeroPHP\Models\PayrollAU\Setting\TrackingCategory;

class Setting extends Remote\Object {

    /**
     * Payroll Account details for SuperExpense, SuperLiabilty, WagesExpense, PAYGLiability & WagesPayable.
     *  See Accounts
     *
     * @property Account[] Accounts
     */

    /**
     * Tracking categories for Employee’s and Timesheet’s.  See Tracking Categories
     *
     * @property TrackingCategory[] TrackingCategories
     */

    /**
     * Number of days in the Payroll year
     *
     * @property string DaysInPayrollYear
     */



    /*
    * Get the resource uri of the class (Contacts) etc
    *
    * @return string
    */
    public static function getResourceURI(){
        return 'Settings';
    }


    /*
    * Get the root node name.  Just the unqualified classname
    *
    * @return string
    */
    public static function getRootNodeName(){
        return 'Setting';
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
        return Remote\URL::API_PAYROLL;
    }


    /*
    * Get the supported methods
    */
    public static function getSupportedMethods(){
        return array(
            Remote\Request::METHOD_GET
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
            'Accounts' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Setting\\Account', true),
            'TrackingCategories' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Setting\\TrackingCategory', true),
            'DaysInPayrollYear' => array (false, self::PROPERTY_TYPE_STRING, null, false)
        );
    }


    /**
     * @return Account
     */
    public function getAccounts(){
        return $this->_data['Accounts'];
    }

    /**
     * @param Account[] $value
     * @return Setting
     */
    public function addAccount(Account $value){
        $this->_dirty['Accounts'] = true;
        $this->_data['Accounts'][] = $value;
        return $this;
    }

    /**
     * @return TrackingCategory
     */
    public function getTrackingCategories(){
        return $this->_data['TrackingCategories'];
    }

    /**
     * @param TrackingCategory[] $value
     * @return Setting
     */
    public function addTrackingCategory(TrackingCategory $value){
        $this->_dirty['TrackingCategories'] = true;
        $this->_data['TrackingCategories'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDaysInPayrollYear(){
        return $this->_data['DaysInPayrollYear'];
    }

    /**
     * @param string $value
     * @return Setting
     */
    public function setDaysInPayrollYear($value){
        $this->_dirty['DaysInPayrollYear'] = $this->_data['DaysInPayrollYear'] != $value;
        $this->_data['DaysInPayrollYear'] = $value;
        return $this;
    }


}