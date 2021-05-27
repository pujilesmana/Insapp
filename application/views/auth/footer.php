    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url() ?>template/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url() ?>template/app-assets/js/core/app-menu.js"></script>
    <script src="<?= base_url() ?>template/app-assets/js/core/app.js"></script>
    <script src="<?= base_url() ?>template/app-assets/js/scripts/components.js"></script>
    <script src="<?= base_url() ?>template/app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    </body>
    <!-- END: Body-->

    </html>

    <?php if ($this->session->flashdata('msg') == 'gagal') : ?>
        <script>
            toastr.error('Email atau password yang anda masukkan salah', 'Gagal Login', {
                "progressBar": true
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'logout') : ?>
        <script>
            toastr.success('Logout berhasil', 'Logout', {
                "progressBar": true
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'password tidak sama') : ?>
        <script>
            toastr.warning('Password tidak sama', 'Password', {
                "progressBar": true
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'email ada') : ?>
        <script>
            toastr.warning('Email telah ada didatabase', 'Email', {
                "progressBar": true
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'Register telah berhasil') : ?>
        <script>
            toastr.success('Register telah berhasil dilakukan, silahkan login', 'Register', {
                "progressBar": true
            });
        </script>
    <?php endif; ?>