<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
        echo "users_controller construct called<br><br>";
    } 

    public function index() {
        echo "This is the index page";
    }

    public function signup() {
        echo "This is the signup page";
    }

    public function login() {
        echo "This is the login page";
    }

    public function logout() {
        echo "This is the logout page";
    }

    public function profile($user_name = NULL) {

    # Setup view
    $this->template->content = View::instance('v_users_profile');

    # Set page title
    $this->template->title = "Profile";

    # Create an array of 1 or many client files to be included in the head
    $client_files_head = Array(
        '/css/widgets.css'
        '/css/profile.css'
        );

    # Use load_client_files to generate the links from the above array
    $this->template->client_files_head = Utils::load_client_files($client_files_head);  

    # Create an array of 1 or many client files to be included before the closing </body> tag
    $client_files_body = Array(
        '/js/widgets.min.js',
        '/js/profile.min.js'
        );

    # Use load_client_files to generate the links from the above array
    $this->template->client_files_body = Utils::load_client_files($client_files_body);  

    # Pass information to the view fragment
    $this->template->content->user_name = $user_name;

    # Render View
    echo $this->template;
    }

} # end of the class
