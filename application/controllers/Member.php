<?php
/**
 * This controllers handles user authentication
 *
 * @author    Aziz S. Hussain <azizsaleh@gmail.com>
 * @copyright GPL license 
 * @license   http://www.gnu.org/copyleft/gpl.html 
 * @link      http://www.AzizSaleh.com
 * @using     Codeigniter 3.1.2
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Member
 * 
 * Authentication controller class
 *
 * @author    Aziz S. Hussain <azizsaleh@gmail.com>
 * @copyright GPL license 
 * @license   http://www.gnu.org/copyleft/gpl.html 
 * @link      http://www.AzizSaleh.com
 * @extends   CI_Controller
 */
class Member extends CI_Controller 
{
    /**
     * Example controller
     *
     * @access    /index.php/member/query_example
     */
    public function query_example()
    {
        $this->load->model('model_users');
        $this->model_users->read_example();
        echo 'Done';
    }
}