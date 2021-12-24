<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GoogleLogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mGoogleLogin');
        date_default_timezone_set("Asia/Jakarta");
    }
    public function login()
    {
        include_once "vendor/apiclient/vendor/autoload.php";

        $google_client = new Google_Client();

        $google_client->setClientId('678635072023-r5ocqk5a3jp0106pbqkac1lb28k14ej4.apps.googleusercontent.com'); //Define your ClientID

        $google_client->setClientSecret('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'); //Define your Client Secret Key

        $google_client->setRedirectUri('http://localhost/Login-With-Google-CI3/googleLogin/login'); //Define your Redirect Uri

        $google_client->addScope('email');

        $google_client->addScope('profile');

        if (isset($_GET["code"])) {
            $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

            if (!isset($token["error"])) {
                $google_client->setAccessToken($token['access_token']);

                $this->session->set_userdata('access_token', $token['access_token']);

                $google_service = new Google_Service_Oauth2($google_client);

                $data = $google_service->userinfo->get();

                $current_datetime = date('Y-m-d H:i:s');

                if ($this->mGoogleLogin->Is_already_register($data['id'])) {
                    //update data
                    $userdata = array(
                        'login_oauth_uid'   => $data['id'],
                        'first_name'        => $data['given_name'],
                        'last_name'         => $data['family_name'],
                        'email_address'     => $data['email'],
                        'profile_picture'   => $data['picture'],
                        'id_person'         => substr($data['email'], 0, -10),
                        'login'             => 1,
                        'created_at'        => $current_datetime
                    );

                    // $this->mGoogleLogin->Update_user_data($userdata, $data['id']);
                } else {
                    //insert data
                    $userdata = array(
                        'login_oauth_uid'   => $data['id'],
                        'first_name'        => $data['given_name'],
                        'last_name'         => $data['family_name'],
                        'email_address'     => $data['email'],
                        'profile_picture'   => $data['picture'],
                        'id_person'         => substr($data['email'], 0, -10),
                        'login'             => 1,
                        'created_at'        => $current_datetime
                    );

                    // $this->mGoogleLogin->Insert_user_data($userdata);
                }
                $this->session->set_userdata($userdata);
            }
        }
        $login_button = '';
        if (!$this->session->userdata('access_token')) {
            $login_button = '<a href="' . $google_client->createAuthUrl() . '"><img src="' . base_url() . 'assets/login/images/google.png" /></a>';
            $data['login_button'] = $login_button;
            $this->load->view('vGoogleLogin', $data);
        } else {
            $this->load->view('vGoogleLogin');
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('access_token');
        $this->session->unset_userdata('user_data');
        redirect('googleLogin/login');
    }
}
