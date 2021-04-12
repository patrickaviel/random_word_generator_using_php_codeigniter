<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Random extends CI_Controller {

    public $counter;
    public $characters=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T',
                        'U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9');
    public $random_word=array();
    public $word;
	public function index()
	{
        $this->random_word=array();
        if($this->session->userdata('counter')){
            $counter = $this->session->userdata('counter');
            $this->session->set_userdata('counter', $counter + 1);
        }else{
            $this->session->set_userdata('counter', 1);
        }

        $this->session->userdata('random_word');

        $this->random_generator();
        $this->word=implode($this->random_word);
        $this->session->set_userdata('random_word', $this->word);
		$this->load->view('random_generator');
	}

    public function random_generator(){
        
        for ($i = 0; $i < 14; $i++) {
            array_push($this->random_word,$this->characters[rand(0,count($this->characters)-1)]);
        }
        return $this;   
          //var randomColor=generateRandomColor();//"#F10531"
    }
}
