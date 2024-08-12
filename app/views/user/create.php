<div class="ui container">
    <div class="ui segments">
        <div class="ui segment">
            <h4>Tambah Produk</h4>
        </div>
        <div class="ui segment">
            <!-- konten -->
            <form action="<?= BASE_URL ?>/user/store" method="post" class="ui form">
                <div class="field">
                    <label>Username</label>
                    <input type="text" name="inp_user">
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="Password" name="inp_pass">
                </div>
                <div class="field">
                    <label for="role">Role</label>
                         <div class="class input">
                          <select name="inp_role" >
                            <option value="admin">Admin</option>
                            <option value="customer">Customer</option>
                          </select>
                    </div>
                </div>
                    <div class="field">
                    <input type="submit" value="Simpan" class="ui black button">
                </div>
            </form>
            <!-- /konten -->
        </div>
    </div>
</div>