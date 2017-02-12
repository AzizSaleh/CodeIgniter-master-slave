<?php
/**
 * This model handles the user table
 *
 * @author    Aziz S. Hussain <azizsaleh@gmail.com>
 * @copyright GPL license 
 * @license   http://www.gnu.org/copyleft/gpl.html 
 * @link      http://www.AzizSaleh.com
 * @using     Codeigniter 3.1.2
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Model_Users
 * 
 * SQL Table: users
 *
 * @author    Aziz S. Hussain <azizsaleh@gmail.com>
 * @copyright GPL license 
 * @license   http://www.gnu.org/copyleft/gpl.html 
 * @link      http://www.AzizSaleh.com
 * @extends   MY_Model
 */
class Model_Users extends MY_Model
{
    /**
     * Read from slave DB
     */
    public function read_example()
    {
        $this->slave();
        // Do read queries
    }

    /**
     * Write to master DB
     */
    public function write_example()
    {
        $this->master();
        // Do write examples
    }
}