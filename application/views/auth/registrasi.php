<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a>Daftar<b> PRAKTIKAN</b></a>
            <small>Universitar Ahmad dahlan</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_up" method="POST">
                    <div class="msg">Daftar Praktikan</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">school</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" value="<?= set_value('nim'); ?>" name="nim" placeholder="Nim" required autofocus />
                            <?= form_error('nim', '<small class="text-danger pl-3" >', '</small>');  ?>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="name" value="<?= set_value('name'); ?>" placeholder="Nama" required autofocus />
                            <?= form_error('name', '<small class="text-danger pl-3" >', '</small>');  ?>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" value="<?= set_value('email'); ?>" placeholder="Email" required />
                            <?= form_error('email', '<small class="text-danger pl-3" >', '</small>');  ?>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="5" placeholder="Password" required />
                            <?= form_error('password', '<small class="text-danger pl-3" >', '</small>');  ?>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirmpassword" minlength="5" placeholder="Konfirmasi password" required />
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">group</i>
                        </span>
                        <div>

                            <input name="gender" type="radio" id="man" class="radio-col-red" value="laki-laki" checked />
                            <label for="man">Laki-laki</label>

                            <input name="gender" type="radio" id="woman" class="radio-col-red" value="perempuan" />
                            <label for="woman">Perempuan</label>

                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">
                        SIGN UP
                    </button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="<?= base_url('auth'); ?>">Sudah memiliki akun? LOGIN</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?= base_url('assets/');  ?>plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?= base_url('assets/');  ?>plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url('assets/');  ?>plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?= base_url('assets/');  ?>plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?= base_url('assets/');  ?>js/admin.js"></script>
    <script src="<?= base_url('assets/');  ?>js/pages/examples/sign-up.js"></script>
</body>