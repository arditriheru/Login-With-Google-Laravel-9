<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login with Google in Codeigniter</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport' />
    <!-- CDN Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- CDN Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/07323268fb.js"></script>

</head>

<body>
    <div class="container">
        <br />
        <h2 align="center">Login Menggunakan Akun Google dengan CodeIgniter</h2>
        <br />
        <div class="panel panel-default">
            <?php
            if (!isset($login_button)) {

                $userdata = $this->session->userdata('user_data');
                echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
                echo '<img src="' . $userdata['profile_picture'] . '" class="img-responsive img-circle img-thumbnail" />';
                echo '<h3><b>Nama : </b>' . $userdata["first_name"] . ' ' . $userdata['last_name'] . '</h3>';
                echo '<h3><b>Email :</b> ' . $userdata['email_address'] . '</h3>';
                echo '<h3><b>Email :</b> ' . $userdata['eduPersonOrgUnitDN'] . '</h3>';
                echo '<h3><a href="' . base_url('googleLogin/logout') . '">Logout</h3></div>';
            } else {
                echo '<div align="center">' . $login_button . '</div>';
            }
            ?>
        </div>
    </div>
</body>

</html>