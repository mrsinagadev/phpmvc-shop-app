<div class="ui container">
    <div class="ui segments">
        <div class="ui segment">
            <h4>Ubah Produk</h4>
        </div>
        <div class="ui segment">
            <!-- konten -->
            <form action="<?= BASE_URL ?>/product/update/<?= $data['product']['id'] ?>" method="post" class="ui form">
                <div class="field">
                    <label>Kode Produk</label>
                    <input type="text" name="inp_kode" value="<?= $data['product']['kode'] ?>">
                </div>
                <div class="field">
                    <label>Nama Produk</label>
                    <input type="text" name="inp_nama" value="<?= $data['product']['nama'] ?>">
                </div>
                <div class="field">
                    <label>Harga Produk</label>
                    <input type="number" min=0 name="inp_harga" value="<?= $data['product']['harga'] ?>">
                </div>
                <div class="field">
                    <label>Stock Produk</label>
                    <input type="number" min=1 name="inp_stock" value="<?= $data['product']['stock'] ?>">
                </div>
                <div class="field">
                    <label>Deskripsi Produk</label>
                    <textarea name="inp_desc" rows="2"><?= $data['product']['deskripsi'] ?></textarea>
                </div>
                <div class="ui divider"></div>
                <div class="field">
                    <input type="submit" value="Simpan" class="ui black button">
                </div>
            </form>
            <!-- /konten -->
        </div>
    </div>
</div>