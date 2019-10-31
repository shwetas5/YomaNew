<?php
if (!defined('BASEPATH'))
  exit('No direct script access allowed');
class Common extends CI_Model {
  /**
   * Admin login 
   *
   * @param String - $email -> email post by admin
   * @param String - $password -> Password post by admin
   * @return Array - $row -> Details of user
   */
  public function sitemaster_records() {
  	$this->db->select('smSitecode, smLatitude, smLongitude');
    $this->db->from('sitemaster');
    return $this->db->get()->result_array();
    // print_r($this->db->last_query());exit;
  }

public function transaction_latest() {
    $this->db->select('tl.Accountid,tl.SiteID,tl.Timestamp,s.smAddress,s.smSitename,s.smTechempid,tl.SolarTotaOutputPower
,tl.Sitebattvolt,tl.Batt_SOC,tl.Total_DCLoad_Current,tl.DG_R_Power,tl.DG_B_Power,tl.DG_Y_Power,tl.Fuellevel_Percentage');
    $this->db->from('transaction_latestdata as tl');
    $this->db->join("sitemaster as s", "s.smSitecode = tl.SiteID", "left");
    return $this->db->get()->result_array();
    // print_r($this->db->last_query());exit;
  }
}
