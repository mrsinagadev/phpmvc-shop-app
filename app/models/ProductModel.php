<?php
class ProductModel extends BaseModel
{
    // inisialisasi properti
    protected $table = 'products';
    // metode lain akan ditambah dibawah ini..
    public function storeProduct($data)
    {
        // query SQL
        $query = "INSERT INTO $this->table (
    kode, nama, deskripsi, harga, stock
    ) VALUES (
    :kode, :nama, :deskripsi, :harga, :stock
    )";
        // data binding mencegah SQL Injection dari form
        $this->db->query($query);
        $this->db->bind('kode', $data['inp_kode']);
        $this->db->bind('nama', $data['inp_nama']);
        $this->db->bind('deskripsi', $data['inp_desc']);
        $this->db->bind('harga', $data['inp_harga']);
        $this->db->bind('stock', $data['inp_stock']);
        // eksekusi query
        $this->db->execute();
        // kembalikan jumlah data yang tersimpan ke controller
        return $this->db->count();
    }
}
