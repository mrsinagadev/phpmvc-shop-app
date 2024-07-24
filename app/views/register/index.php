<div class="ui container" style="margin-top: 7rem; display: flex; justify-content: center; max-width: 40%! important">
    <div class="ui fluid card">
        <div class="content">
            <div class="header" style="text-align: center;">Register User</div>
            <div class="meta" style="text-align: center;">Masuk dan Mulai Belanja!</div>
        </div>
        <div class="description">
            <?php include_once ('../app/views/components/flash.php') ?>
        <!-- form login -->
        <form id="frm-register" action="<?= BASE_URL ?>/register/proses" method="post" id="frm-register" class="ui form" style="padding: 12px">
            <div class="field">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" autocomplete="off">
            </div>
            <div class="field">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="field">
                <label for="konfirmasi_password">Konfirmasi Password</label>
                <input type="password" name="konfirmasi_password" id="konfirmasi_password">
            </div>
        </form>
        </div>
        <div class="extra content">
            <button type="button" class="ui positive button" onclick="document.getElementById('frm-register').submit()">
            <i class="ui lock icon"></i>Register
            </button>
        </div>
    </div>
</div>