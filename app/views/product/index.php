<div class="ui container">
    <div class="ui segments">
        <div class="ui segment">
            <h4 style="text-align: center; font-size:23px;">List Produk</h4>
        </div>
        <div class="ui segment">
            <!-- konten -->
            <?php include_once('../app/views/components/flash.php') ?>
            
            <table class="ui table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode</th>
                        <th>Detail Produk</th>
                        <th>Harga</th>
                        <th>Stock</th>
                        <th class="center aligned">
                            <a href="<?= BASE_URL ?>/product/create" class="ui black tiny button fluid">Create</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['products'] as $key => $product) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td>
                                <h4 class="ui header">
                                    <?= $product['kode'] ?>
                                </h4>
                            </td>
                            <td>
                                <h4 class="ui header">
                                    <div class="content">
                                        <a href="<?= BASE_URL ?>/product/show/<?= $product['id'] ?>">
                                            <?= $product['nama'] ?>
                                        </a>
                                        <div class="sub header">
                                            <?= $product['deskripsi'] ?>
                                        </div>
                                    </div>
                                </h4>
                            </td>
                            <td>
                                Rp.<?=number_format($product['harga'], 0, ',', '.') ?>
                            </td>
                            <td>
                                <?= $product['stock'] ?>
                            </td>
                            <td class="center aligned collapsing">
                                <a href="<?= BASE_URL ?>/product/edit/<?= $product['id'] ?>" class="ui basic button mini">Edit</a>
                                <a href="<?= BASE_URL ?>/product/destroy/<?= $product['id'] ?>" class="ui red button mini" onclick="return confirm('Yakin ingin menghapus <?= $product['kode'] ?>?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <!-- /konten -->
        </div>
    </div>
</div>