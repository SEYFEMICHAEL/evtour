<?php

class SignUpCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('SignupModel', 'Signup');
    }

    public function logged_in_check()
	{
		if ($this->session->userdata("logged_in")) {
			redirect(base_url());
		}
    }
    public function logout_user()
	{
		$this->session->unset_userdata("logged_in");
		$this->session->sess_destroy();
		redirect("auth");
	}


    function login_user(){ 

        $this->logged_in_check();
		
		// $this->load->library('form_validation');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]|max_length[20]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|max_length[20]');
		if ($this->form_validation->run() == true) 
		{
			// $this->load->model('auth_model', 'auth');	
			// check the username & password of user
			$status = $this->Signup->validate();
			if ($status == ERR_INVALID_USERNAME) {
                echo'<script>console.log("not valid mail");</script>';
				$this->session->set_flashdata("error", "Email is invalid");
			}
			elseif ($status == ERR_INVALID_PASSWORD) {
                echo'<script>console.log("not valid pass");</script>';
				$this->session->set_flashdata("error", "Password is invalid");
			}
			else
			{echo'<script>console.log("valid login");</script>';
				// success
				// store the user data to session
				$this->session->set_userdata($this->Signup->get_data());
                $this->session->set_userdata("logged_in", true);
                if($this->session->userdata('role')=='Admin')redirect(base_url('admin'));
				// redirect to dashboard
				redirect(base_url());
			}
		}

		// $this->load->view("header");		
		$this->load->view("forms/login");
		// $this->load->view("footer");
 
                }

                function admin(){
                    $this->load->view('dashboard/admin');
                }
                function book_user(){
                    $this->load->view('forms/booking');
                }
        public function index() {
            $this->load->view('forms/signup');
        }
        public function login() {
            $this->load->view('forms/login');
        }

    public function reg() {

        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[5]|max_length[30]');
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[5]|max_length[15]|is_unique[user.username]|alpha_dash');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[user.email]');
        // $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[5]|max_length[30]|xss_clean');
        // $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[5]|max_length[15]|xss_clean|is_unique[signup.username]|alpha_dash');
        // $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]|xss_clean');
        // $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|xss_clean|is_unique[signup.email]');
       
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {

            $name = $this->input->post("name");
            $username = $this->input->post("username");
            $email = $this->input->post("email");
            $password = $this->input->post("password");
          
            $isDone = $this->Signup->getSignup($name,$username, $password, $email);

            if ($isDone === TRUE) {
                //$this->session->set_flashdata("reg", "Registration Successful!");
               redirect(base_url());
                //$this->load->view('thanks');
            }
        }
    }

}
