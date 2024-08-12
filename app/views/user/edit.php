<div class="ui container">
    <div class="ui segments">
        <div class="ui segment">
            <h4>Ubah Data</h4>
        </div>
        <div class="ui segment">
        <form action="<?= BASE_URL ?>/user/update/<?= $data['user']['id'] ?>" method="post" class="ui form">
                <div class="field">
                    <label>Username</label>
                    <input type="text" name="inp_user" value="<?= $data['user']['username'] ?>" >
                </div>
                <!-- <div class="field">
                    <label>Password</label>
                    <input type="Password" name="inp_pass" value="<?= $data['user']['password'] ?>">
                </div> -->
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
                    <input type="submit" value="Ubah" class="ui black button">
                </div>
            </form>
        </div>
    </div>
</div>