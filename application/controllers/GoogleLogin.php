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

        $google_client->setClientId('876905194422-sf3k6298hsjv55601id5475maji21fcs.apps.googleusercontent.com'); //Define your ClientID

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
                    $user_data = array(
                        'first_name'        => $data['given_name'],
                        'last_name'         => $data['family_name'],
                        'email_address'     => $data['email'],
                        'profile_picture'   => $data['picture'],
                        'eduPersonOrgUnitDN' => $data['eduPersonOrgUnitDN'],
                        'updated_at'        => $current_datetime
                    );

                    // $this->mGoogleLogin->Update_user_data($user_data, $data['id']);
                } else {
                    //insert data
                    $user_data = array(
                        'login_oauth_uid'   => $data['id'],
                        'first_name'        => $data['given_name'],
                        'last_name'         => $data['family_name'],
                        'email_address'     => $data['email'],
                        'profile_picture'   => $data['picture'],
                        'eduPersonOrgUnitDN' => $data['eduPersonOrgUnitDN'],
                        'created_at'        => $current_datetime
                    );

                    // $this->mGoogleLogin->Insert_user_data($user_data);
                }
                $this->session->set_userdata('user_data', $user_data);
            }
        }
        $login_button = '';
        if (!$this->session->userdata('access_token')) {
            $login_button = '<a href="https://accounts.google.com/o/oauth2/auth/identifier?response_type=code&access_type=online&client_id=876905194422-sf3k6298hsjv55601id5475maji21fcs.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2FLogin-With-Google-CI3%2FgoogleLogin%2Flogin&state&scope=email%20profile&approval_prompt=auto&flowName=GeneralOAuthFlow"><img src="' . base_url() . 'assets/login/images/google.png" /></a>';
            $data['login_button'] = $login_button;
            $this->load->view('vGoogleLogin', $data);
        } else {
            $this->load->view('vGoogleLogin', $data);
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('access_token');
        $this->session->unset_userdata('user_data');
        redirect('googleLogin/login');
    }
}
