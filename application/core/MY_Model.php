<?php
/**
 * This is the core MY_Model.php file. All your models
 * should extend this, which sets up the master/slave
 * objects.
 *
 * @author    Aziz S. Hussain <azizsaleh@gmail.com>
 * @copyright GPL license 
 * @license   http://www.gnu.org/copyleft/gpl.html 
 * @link      http://www.AzizSaleh.com
 * @using     Codeigniter 3.1.2
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * MY_Model
 * 
 * @author    Aziz S. Hussain <azizsaleh@gmail.com>
 * @copyright GPL license 
 * @license   http://www.gnu.org/copyleft/gpl.html 
 * @link      http://www.AzizSaleh.com
 * @extends   CI_Model
 */
class MY_Model extends CI_Model
{
	/**
	 * Master DB object
	 *
	 * @var CI_DB_mysqli_driver
	 */
	public $master;

	/**
	 * Slave DB object
	 *
	 * @var CI_DB_mysqli_driver
	 */
	public $slave;

	/**
	 * Load master/slave objects, set it to master by default
	 */
	public function __construct()
	{
		parent::__construct();
		$this->master = $this->load->database('master', TRUE);
		$this->slave = $this->load->database('slave', TRUE);
		$this->set_master();
	}

	/**
	 * Set master alias
	 */
	public function master()
	{
		$this->set_master();
	}

	/**
	 * Set DB handler to master
	 */
	public function set_master()
	{
		$this->db = $this->master;
	}

	/**
	 * Set slave alias
	 */
	public function slave()
	{
		$this->set_slave();
	}

	/**
	 * Set DB handler to slave
	 */
	public function set_slave()
	{
		$this->db = $this->slave;
	}
}