<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

  protected $userHeader   = 'theme/frontend/layout/header';
  protected $userFooter   = 'theme/frontend/layout/footer';
  protected static $ci;
   

  protected $commonHeader  = 'common/layout/header';
  protected $commonNavbar  = 'common/layout/navbar';
  protected $commonSidebar = 'common/layout/sidebar';
  protected $commonFooter  = 'common/layout/footer';

  
  protected static function ciObj()
  {
    if (empty(self::$ci)){
      self::$ci = & get_instance();;
    }
    return self::$ci;
  }

  public function adminView($templateName, $data = array(), $header=false,  $return=false)
  {
    if($header!==false){
      $this->view('common/'.$templateName, $data, $return);
    } else {
      if(!self::ciObj()->session->userdata('is_logged_in')){
        redirect('index');
      }
      $this->view($this->commonHeader, $data, $return);
      $this->view($this->commonNavbar, $data, $return);
      $this->view($this->commonSidebar, $data, $return);
      $this->view('common/'.$templateName, $data, $return);
      $this->view($this->commonFooter, $data, $return);
    }
  }

    
  

  public function userView($templateName, $data = array(), $return = false)
  {
      $this->view($this->userHeader, $data, $return);
      $this->view('theme/frontend/'.$templateName, $data, $return);
      $this->view($this->userFooter, $data, $return);
    //}
  }
}
