<?php
class SurveyModel extends CI_Model 
{
	function __construct()
    {
		parent::__construct();
		$this->load->database();
    }
    function addSurvey($data)
	{	
		if($this->db->insert('survey',$data))
		{
		return "SUCCESS";
		}
	}

}
?>
