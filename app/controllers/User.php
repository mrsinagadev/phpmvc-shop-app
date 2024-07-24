<?php

class User extends BaseController
{
	public function index()
	{
		// panggil semua data user dari database
		$users = $this->model('UserModel')->getAll();
		return parent::view('user/index', ['users' => $users]);
	}

	public function edit()
	{
		return parent::view('user/edit');
	}

	public function create()
	{
		return parent::view('user/create');
	}

	public function destroy($id)
	{
		$delete = $this->model('UserModel')->destroy($id);
		if ($delete) {
			$this->success('Sukses!', 'Data berhasil dihapus.');
		} else {
			$this->error('Gagal!', 'Data gagal dihapus.');
		}
		return parent::redirect('user', 'index');
	}
}
