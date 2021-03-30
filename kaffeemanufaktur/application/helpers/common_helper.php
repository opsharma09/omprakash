<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */


if ( ! function_exists('com_slugify'))
{
  function com_slugify($text) {
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        $text = trim($text, '-');
        $text = strtolower($text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        if (empty($text))
            return 'n-a';
        return $text;
    }
}
if ( ! function_exists('slugify_return'))
{
  function slugify_return($text) {
        $text = preg_replace('~[^\\pL\d]+~u', ' ', $text);
        $text = trim($text, '-');
        $text = strtoupper($text);
        $text = preg_replace('~[^-\w]+~', ' ', $text);
        if (empty($text))
            return 'n-a';
        return $text;
    }
}
// Sanitize input fields
if (! function_exists('sanitizer')) {
  function sanitizer($string = "") {
    //$sanitized_string = preg_replace("/[^@ -.a-zA-Z0-9]+/", "", html_escape($string));
    $sanitized_string = html_escape($string);
    return $sanitized_string;
  }
}

if(! function_exists('convert_url')) {
  function convert_url($text)
  {
      $text = trim($text, '-');
      $text = preg_replace('~-~', ' ', $text);
      $text = ucfirst($text);
      return $text;
  }
}
if(! function_exists('op_pagination_simple')) {
  function op_pagination_simple($query='',$limit='',$page=''){
    $ci =& get_instance();
      $ci->load->database();
      $offset = ($page - 1) * $limit;
      $count_query = $ci->db->query("SELECT COUNT(*) as count FROM $query")->row();
      $item_count = $count_query->count;
      $total_page = ceil($item_count/$limit);
      $result_query = $ci->db->query("SELECT * FROM $query LIMIT $offset,$limit")->result_array();
      $response = array('total_page'=>$total_page,'item_count'=>$item_count,'current_page'=>$page,'limit'=>$limit,'data'=>$result_query);
      return $response;
  }
}


// ------------------------------------------------------------------------
/* End of file user_helper.php */
/* Location: ./system/helpers/common.php */
