<div class="ui container">
    <div class="ui segments">
        <div class="ui segment">
            <h4>Tambah Produk</h4>
        </div>
        <div class="ui segment">
            <!-- konten -->
            <form action="<?= BASE_URL ?>/product/store" method="post" class="ui form">
                <div class="field">
                    <label>Kode Produk</label>
                    <input type="text" name="inp_kode">
                </div>
                <div class="field">
                    <label>Nama Produk</label>
                    <input type="text" name="inp_nama">
                </div>
                <div class="field">
                    <label>Harga Produk</label>
                    <input type="number" min=0 name="inp_harga">
                </div>
                <div class="field">
                    <label>Stock Produk</label>
                    <input type="number" min=1 name="inp_stock">
                </div>
                <div class="field">
                    <label>Deskripsi Produk</label>
                    <textarea name="inp_desc" rows="2"></textarea>
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