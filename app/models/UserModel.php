<?php

class UserModel extends BaseModel{
    //ubah propert table yang ada pada class basemodel
    //dengan nama table yang digunakan saat model ini dipanggil
    protected $table = 'users';

    public function hash($teks){
        return md5($teks);
    }
}