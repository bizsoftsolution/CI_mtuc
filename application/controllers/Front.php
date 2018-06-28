<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Front extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->library('session');
		$this->load->database();
		$this->load->model('SurveyModel');
    }
	public function index()
	{	
		$this->load->view('front');
	}
	public function sucess()
	{
		$this->load->view('sucess');
	}
	public function survey()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$question1 = "";
		if($this->input->post('radios') != "")
		{
			$question1 = $this->input->post('radios');
		}
		
		$question2 = "";
		
		
		if($this->input->post('radios2') !="")
		{
			$question2 = $this->input->post('radios2');
		}
		else
		{
			$question2 = $this->input->post('radios1');
		}
		$nQ3 = "";
		
		$question3 = $this->input->post('checkboxes');
		if(isset($question3) && is_array($question3))
		{ 
			$nQ3 = implode(",", $question3); 
		}
		else
		{
			$nQ3 = "";
		}
		
		
		//$question3 = implode(',', $this->input->post('checkboxes'));
		//echo $nQ3;
		 
		 $data = array(
			'name'=>$name,
			'email'=>$email,
			'question1'=>$question1,
			'question2'=>$question2,
			'question3'=>$nQ3,
			'survey_date'=>date('Y-m-d')
			
		 );
	echo $this->SurveyModel->addSurvey($data);
	}
	
}

//nubeorgm_survey
//nubeorgm_survey
?>
