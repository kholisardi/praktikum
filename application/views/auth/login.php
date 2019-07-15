<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href=""><b>LOGIN USER</b></a>
            <small></small>
        </div>
        <div class="card">
            <div class="body">
                <form action="<?= base_url('auth'); ?>" method="POST">
                    <div class="msg">Sign in to start your session</div>

                    <?= $this->session->flashdata('message'); ?>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" id="nim" name="nim" value="<?= set_value('nim'); ?>" placeholder="nim" required autofocus />
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink" />
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">
                                SIGN IN
                            </button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="<?= base_url('auth/registrasi'); ?>">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?= base_url(' assets / ');  ?>plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?= base_url(' assets / ');  ?>plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url(' assets / ');  ?>plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?= base_url(' assets / ');  ?>plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?= base_url(' assets / ');  ?>js/admin.js"></script>
    <script src="<?= base_url(' assets /');  ?>js/pages/examples/sign-in.js"></script>
</body>