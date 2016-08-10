<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2016                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2016
 *
 * Generated from xml/schema/CRM/Core/ActionLog.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_DAO_ClearActionLog extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_action_log';
  /**
   * static instance to hold the field values
   *
   * @var array
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   */
  static $_log = false;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   * FK to Contact ID
   *
   * @var int unsigned
   */
  public $contact_id;
  /**
   * FK to id of the entity that the action was performed on. Pseudo - FK.
   *
   * @var int unsigned
   */
  public $entity_id;
  /**
   * name of the entity table for the above id, e.g. civicrm_activity, civicrm_participant
   *
   * @var string
   */
  public $entity_table;
  /**
   * FK to the action schedule that this action originated from.
   *
   * @var int unsigned
   */
  public $action_schedule_id;
  /**
   * date time that the action was performed on.
   *
   * @var datetime
   */
  public $action_date_time;
  /**
   * Was there any error sending the reminder?
   *
   * @var boolean
   */
  public $is_error;
  /**
   * Description / text in case there was an error encountered.
   *
   * @var text
   */
  public $message;
  /**
   * Keeps track of the sequence number of this repetition.
   *
   * @var int unsigned
   */
  public $repetition_number;
  /**
   * Stores the date from the entity which triggered this reminder action (e.g. membership.end_date for most membership renewal reminders)
   *
   * @var date
   */
  public $reference_date;
  /**
   * class constructor
   *
   * @return civicrm_action_log
   */
  function __construct()
  {
    $this->__table = 'civicrm_action_log';
    parent::__construct();
  }

  static function clearTable()
  {
    CRM_Core_DAO::singleValueQuery("TRUNCATE TABLE civicrm_action_log");

    $result = array(
      'is_error' => 0,
      'messages' => ts('Table cleared successfully'),
    );
    return $result;    
  }
}
