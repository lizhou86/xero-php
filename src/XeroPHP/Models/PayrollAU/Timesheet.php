<?php

namespace XeroPHP\Models\PayrollAU;

use XeroPHP\Remote;

use XeroPHP\Models\PayrollAU\Timesheet\TimesheetLine;

class Timesheet extends Remote\Object {

    /**
     * The Xero identifier for an employee
     *
     * @property string EmployeeID
     */

    /**
     * Period start date (YYYY-MM-DD)
     *
     * @property \DateTime StartDate
     */

    /**
     * Period end date (YYYY-MM-DD)
     *
     * @property \DateTime EndDate
     */

    /**
     * See TimesheetLines
     *
     * @property TimesheetLine[] TimesheetLines
     */

    /**
     * See Timesheet Status Codes
     *
     * @property string Status
     */

    /**
     * Timesheet total hours
     *
     * @property string[] Hours
     */

    /**
     * The Xero identifier for a Payroll Timesheet
     *
     * @property string TimesheetID
     */


    const STATUS_DRAFT     = 'DRAFT'; 
    const STATUS_PROCESSED = 'PROCESSED'; 
    const STATUS_APPROVED  = 'APPROVED'; 


    /*
    * Get the resource uri of the class (Contacts) etc
    *
    * @return string
    */
    public static function getResourceURI(){
        return 'Timesheets';
    }


    /*
    * Get the root node name.  Just the unqualified classname
    *
    * @return string
    */
    public static function getRootNodeName(){
        return 'Timesheet';
    }


    /*
    * Get the guid property
    *
    * @return string
    */
    public static function getGUIDProperty(){
        return 'TimesheetID';
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
            Remote\Request::METHOD_POST,
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
            'EmployeeID' => array (true, self::PROPERTY_TYPE_STRING, null, false),
            'StartDate' => array (true, self::PROPERTY_TYPE_DATE, '\\DateTime', false),
            'EndDate' => array (true, self::PROPERTY_TYPE_DATE, '\\DateTime', false),
            'TimesheetLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Timesheet\\TimesheetLine', true),
            'Status' => array (false, self::PROPERTY_TYPE_ENUM, null, false),
            'Hours' => array (false, self::PROPERTY_TYPE_STRING, null, true),
            'TimesheetID' => array (false, self::PROPERTY_TYPE_STRING, null, false)
        );
    }


    /**
     * @return string
     */
    public function getEmployeeID(){
        return $this->_data['EmployeeID'];
    }

    /**
     * @param string $value
     * @return Timesheet
     */
    public function setEmployeeID($value){
        $this->_dirty['EmployeeID'] = $this->_data['EmployeeID'] != $value;
        $this->_data['EmployeeID'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate(){
        return $this->_data['StartDate'];
    }

    /**
     * @param \DateTime $value
     * @return Timesheet
     */
    public function setStartDate(\DateTime $value){
        $this->_dirty['StartDate'] = $this->_data['StartDate'] != $value;
        $this->_data['StartDate'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate(){
        return $this->_data['EndDate'];
    }

    /**
     * @param \DateTime $value
     * @return Timesheet
     */
    public function setEndDate(\DateTime $value){
        $this->_dirty['EndDate'] = $this->_data['EndDate'] != $value;
        $this->_data['EndDate'] = $value;
        return $this;
    }

    /**
     * @return TimesheetLine
     */
    public function getTimesheetLines(){
        return $this->_data['TimesheetLines'];
    }

    /**
     * @param TimesheetLine[] $value
     * @return Timesheet
     */
    public function addTimesheetLine(TimesheetLine $value){
        $this->_dirty['TimesheetLines'] = true;
        $this->_data['TimesheetLines'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(){
        return $this->_data['Status'];
    }

    /**
     * @param string $value
     * @return Timesheet
     */
    public function setStatu($value){
        $this->_dirty['Status'] = $this->_data['Status'] != $value;
        $this->_data['Status'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getHours(){
        return $this->_data['Hours'];
    }

    /**
     * @param string[] $value
     * @return Timesheet
     */
    public function addHour($value){
        $this->_dirty['Hours'] = true;
        $this->_data['Hours'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimesheetID(){
        return $this->_data['TimesheetID'];
    }

    /**
     * @param string $value
     * @return Timesheet
     */
    public function setTimesheetID($value){
        $this->_dirty['TimesheetID'] = $this->_data['TimesheetID'] != $value;
        $this->_data['TimesheetID'] = $value;
        return $this;
    }


}