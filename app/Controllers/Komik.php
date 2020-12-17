<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
	protected $komikModel;
	public function __construct()
	{
		$this->komikModel = new KomikModel();
	}

	public function index()
	{
		// $komik = $this->komikModel->findAll();

		$currentPage = $this->request->getVar('page_komik') ? $this->request->getVar('page_komik') : 1;

		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$komik = $this->komikModel->search($keyword);
		} else {
			$komik = $this->komikModel;
		}

		$data = [
			'title' => 'Comic List',
			'komik' => $komik->paginate(8, 'komik'),
			'pager' => $this->komikModel->pager,
			'currentPage' => $currentPage,
		];

		return view('komik/index', $data);
	}

	public function detail($slug)
	{
		$komik = $this->komikModel->getKomik($slug);
		$data = [
			'title' => $komik['judul'],
			'komik' => $this->komikModel->getKomik($slug)
		];

		// jika komik tidak ad di tabel
		if (empty($data['komik'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul komik ' . $slug . ' tidak ditemukan');
		}

		return view('komik/detail', $data);
	}

	//--------------------------------------------------------------------

}
