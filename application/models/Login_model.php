<?php
if (!defined('BASEPATH'))
  exit('No direct script access allowed');
class Login_model extends CI_Model {
  /**
   * Admin login 
   *
   * @param String - $email -> email post by admin
   * @param String - $password -> Password post by admin
   * @return Array - $row -> Details of user
   */
  public function admin_login($username, $password) {
    $where = array('umLoginName' => $username, 'umLoginPassword' => $password);
    $this->db->select('umID, umName, umLoginName, umLoginPassword, umEmailid');
    $this->db->from('users as a');
    $this->db->where($where);
    return $this->db->get()->row_array();
  }
}
