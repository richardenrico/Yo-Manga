<?php namespace App\Controllers;

use App\Models\KomikModel;

class Admin extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Yo!Admin',
		];

		return view('admin/home', $data);
	}

    protected $komikModel;
	public function __construct()
	{
		$this->komikModel = new KomikModel();
    }
    
    public function view_komik()
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
		
		return view('admin/komik/index', $data);
	}

    public function detail_komik($slug) 
	{
		$komik = $this->komikModel->getKomik($slug);
		$data = [
			'title' => $komik['judul'],
			'komik' => $this->komikModel->getKomik($slug)
		];

		// jika komik tidak ad di tabel
		if (empty($data['komik'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul komik '.$slug.' tidak ditemukan');
		}
		
		return view('admin/komik/detail', $data);
    }
    
    public function create_komik() 
	{
		$data = [
			'title' => 'Add Comic',
			'validation' => \Config\Services::validation()
		];

		return view('admin/komik/create', $data);
    }
    
    public function save_komik() 
	{
		// validasi input
		if (!$this->validate([
			// 'judul' => 'required|is_unique[komik.judul]'
			'judul' => [
				'rules' => 'required|is_unique[komik.judul]',
				'errors' => [
					'required' => '{field} komik harus diisi',
					'is_unique' => '{field} komik sudah terdaftar'
				]
			],
			'penulis' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} komik harus diisi'
				]
			],
			'penerbit' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} komik harus diisi'
				]
			],
			'sampul' => [
				'rules' => 'is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]|max_size[sampul,1024]',
				'errors' => [
					'max_size' => 'Ukuran gambar terlalu besar',
					'is_image' => 'File bukan berupa gambar',
					'mime_in' => 'File bukan berupa gambar'
				]
			]
		])) {
			// $validation = \Config\Services::validation();
			// return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
			return redirect()->to('/admin/komik/create')->withInput();
		}

		$sinopsis = $this->request->getVar('sinopsis');
		if ($sinopsis == null) {
			$sinopsis = 'No Synopsis';
		}

		// ambil gambar
		$fileSampul = $this->request->getFile('sampul');
		// cek apakah tidak ada gambar yang diupload
		if ($fileSampul->getError() == 4) {
			$namaSampul = 'default.jpg';
		} else {
			// //generate nama sampul random
			// $namaSampul = $fileSampul->getRandomName();
			// pindahkan file ke folder img
			$fileSampul->move('img');
			// ambil nama file sampul
			$namaSampul = $fileSampul->getName();
		}

		$slug = url_title($this->request->getVar('judul'), '-', true);
		$this->komikModel->save([
			'judul' => $this->request->getVar('judul'),
			'slug' => $slug,
			'penulis' => $this->request->getVar('penulis'),
			'penerbit' => $this->request->getVar('penerbit'),
			'sampul' => $namaSampul,
			'sinopsis' => $sinopsis,
		]);

		session()->setFlashData('pesan', 'Data berhasil ditambahkan.');

		return redirect()->to('/admin/komik');
	}

    public function delete_komik($id) 
	{
		// cari gambar berdasarkan id
		$komik = $this->komikModel->find($id);

		// cek jika file gambar default
		if ($komik['sampul'] != 'default.jpg') {
			// hapus gambar dri img
			unlink('img/' . $komik['sampul']);
		}


		$this->komikModel->delete($id);

		session()->setFlashData('pesan', 'Data berhasil dihapus.');

		return redirect()->to('/admin/komik');
    }
    
    public function edit_komik($slug)
	{
		$komik = $this->komikModel->getKomik($slug);
		$data = [
			'title' => 'Edit ' . $komik['judul'] . ' Data',
			'validation' => \Config\Services::validation(),
			'komik' => $this->komikModel->getKomik($slug)
		];

		return view('admin/komik/edit', $data);
    }
    
    public function update_komik($id) 
	{
		//cek judul
		$komikLama = $this->komikModel->getKomik($this->request->getVar('slug'));
		if ($komikLama['judul'] == $this->request->getVar('judul')) {
			$rule_judul = 'required';
		} else {
			$rule_judul = 'required|is_unique[komik.judul]';
		}


		// validasi input
		if (!$this->validate([
			// 'judul' => 'required|is_unique[komik.judul]'
			'judul' => [
				'rules' => $rule_judul,
				'errors' => [
					'required' => '{field} komik harus diisi',
					'is_unique' => '{field} komik sudah terdaftar'
				]
			],
			'penulis' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} komik harus diisi'
				]
			],
			'penerbit' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} komik harus diisi'
				]
			],
			'sampul' => [
				'rules' => 'is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]|max_size[sampul,1024]',
				'errors' => [
					'max_size' => 'Ukuran gambar terlalu besar',
					'is_image' => 'File bukan berupa gambar',
					'mime_in' => 'File bukan berupa gambar'
				]
			]
		])) {
			// $validation = \Config\Services::validation();
			// return redirect()->to('/komik/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
			return redirect()->to('/admin/komik/edit/' . $this->request->getVar('slug'))->withInput();
		}

		$fileSampul = $this->request->getFile('sampul');

		// cek gambar, apakah tetap gambar lama 
		if ($fileSampul->getError() == 4) {
			$namaSampul = $this->request->getVar('sampulLama');
		} else {
			// //generate nama sampul random
			// $namaSampul = $fileSampul->getRandomName();
			// pindahkan file ke folder img
			$fileSampul->move('img');
			// ambil nama file sampul
			$namaSampul = $fileSampul->getName();
			// hapus file lama
			unlink('img/' . $this->request->getVar('sampulLama'));
		}

		$slug = url_title($this->request->getVar('judul'), '-', true);
		$this->komikModel->save([
			'id' => $id,
			'judul' => $this->request->getVar('judul'),
			'slug' => $slug,
			'penulis' => $this->request->getVar('penulis'),
			'penerbit' => $this->request->getVar('penerbit'),
			'sampul' => $namaSampul,
			'sinopsis' => $this->request->getVar('sinopsis'),
		]);

		session()->setFlashData('pesan', 'Data berhasil ditambahkan.');

		return redirect()->to('/admin/komik');
	}

	//--------------------------------------------------------------------

    
}
