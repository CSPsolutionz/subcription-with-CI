<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {



public function __construct()
 {
  parent::__construct();
  $this->load->model('employee_model');
  $this->load->helper(array('form', 'url'));
 }




	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -aa
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function view($page='signup1')
	{
		     if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        
        $this->load->view('pages/'.$page, $data);
        
	}
	public function signup2($pa='signup2')
	{
		     if ( ! file_exists(APPPATH.'views/pages/'.$pa.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

       
        
        $this->load->view('pages/'.$pa);
        
	}


	public function signup1()
	{

		
$fname=$_POST['fname'];

$this->session->set_userdata('fname', $fname);
$value=$this->session->userdata('fname');


$lname=$_POST['lname'];

$this->session->set_userdata('lname', $lname);

$password=$_POST['password'];
$password=md5($password);
$this->session->set_userdata('password', $password);

$cpassword=$_POST['cpassword'];
$cpassword=md5($cpassword);
$this->session->set_userdata('cpassword', $cpassword);


$phone=$_POST['phone'];
$this->session->set_userdata('phone', $phone);

$city=$_POST['city'];
$this->session->set_userdata('city', $city);

$cat=$_POST['cat'];
$this->session->set_userdata('cat', $cat);

$promo=$_POST['promo'];
$this->session->set_userdata('promo', $promo);

$email=$_POST['email'];
$this->session->set_userdata('email', $email);



$query = $this->db->get_where('basic_info', array('email' => $email));



$r = $query->row_array();

if(empty($r)){

if($password==$cpassword ){
	if($cat !="0" ){

 $this->signup2();
	}else {
$_SESSION["fmsg1"] = "please select category";
	
	$this->view();
}
}else {
$_SESSION["fmsg1"] = "password not match";
	
	$this->view();
}

}else{
	$_SESSION["fmsg1"] = "Email already exist, try another one";
	$this->view();
		//$this->load->view('pages/'.$page, $data);
		}
		
	}


public function signup3($p='signup3')
	{
		     if ( ! file_exists(APPPATH.'views/pages/'.$p.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

       
        
        $this->load->view('pages/'.$p);
        
	}

	public function process2()
	{
		
//$sub_cat=$_POST['sub_cat'];

//$this->session->set_userdata('sub_cat', $sub_cat);
//$value=$this->session->userdata('sub_cat');

$pname=$_POST['pname'];

$this->session->set_userdata('pname', $pname);

$this->signup3();
       
	}



public function process3()
	{


		$fname=$this->session->userdata('fname');
        $lname=$this->session->userdata('lname');
        $email=$this->session->userdata('email');
        $password=$this->session->userdata('password');
        $phone=$this->session->userdata('phone');
        $city=$this->session->userdata('city');
        $cat=$this->session->userdata('cat');
        $promo=$this->session->userdata('promo');
        $sub_cat=$this->session->userdata('sub_cat');
        $pname=$this->session->userdata('pname');
        

	
		$db=get_instance()->db->conn_id;

		
		
//$fname=$this->db->escape_str($this->session->userdata('fname'));

$fname=addslashes(mysqli_real_escape_string($db, $fname));
$lname=addslashes(mysqli_real_escape_string($db, $lname));
$email=addslashes(mysqli_real_escape_string($db, $email));
$phone=addslashes(mysqli_real_escape_string($db, $phone));
$password=addslashes(mysqli_real_escape_string($db, $password));
$city=addslashes(mysqli_real_escape_string($db, $city));
$cat=addslashes(mysqli_real_escape_string($db, $cat));
$sub_cat=addslashes(mysqli_real_escape_string($db, $sub_cat));
$pname=addslashes(mysqli_real_escape_string($db, $pname));
$promo=addslashes(mysqli_real_escape_string($db, $promo));

session_unset();

$quer = $this->db->get_where('category', array('cate_name' => $cat));



$rc = $quer->row_array();

if(!empty($rc)){



  $save = array(
      'fname'          => $fname,
      'lname'          => $lname,
      'email'          => $email,
      'phone'          => $phone,
      'password'          => $password,
      'city'          => $city,
      'cat'          => $cat,
      'sub_cat'          => $sub_cat,
      'pname'          => $pname,
      'promocode'          => $promo,
      
        );

   $this->employee_model->saveEmployee($save);
 // redirect('employee/index');
 
$this->view();
}else
{
	$_SESSION["fmsg1"] = "Category doesnot exist, try another";
	$this->signup3();
}



       
	}




}
