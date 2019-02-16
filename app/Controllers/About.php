<?php 

class About extends Controller
{
	public function index($nama = "Farras Insan Nh", $pekerjaan = "pelajar" ,$umur = 16)
	{
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = 'About me';
		$this->view('templates/header', $data);
		$this->view('about/iindex', $data);
		$this->view('templates/footer');
	}
	
	public function page()
	{	
		$data['judul'] = 'Page';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}