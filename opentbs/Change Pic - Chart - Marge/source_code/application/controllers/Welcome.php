<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	private function _get_data()
	{
		return array(
			array(
				'kode_wilayah' => '01.',
				'nama_wilayah' => 'Jawa Timur',
				'kota'		   => array(
					array(
						'kode_wilayah' => '01.01',
						'nama_wilayah' => 'Mojokerto'
					),
					array(
						'kode_wilayah' => '01.02',
						'nama_wilayah' => 'Malang'
					),
					array(
						'kode_wilayah' => '01.03',
						'nama_wilayah' => 'Surabaya'
					)
				)
			),
			array(
				'kode_wilayah' => '02.',
				'nama_wilayah' => 'Jawa Tengah',
				'kota'		   => array(
					array(
						'kode_wilayah' => '02.01',
						'nama_wilayah' => 'Semarang'
					),
					array(
						'kode_wilayah' => '02.02',
						'nama_wilayah' => 'Banjarnegara'
					),
					array(
						'kode_wilayah' => '02.03',
						'nama_wilayah' => 'Boyolali'
					)
				)
			)
		);
	}

	public function cetak()
	{
		$this->load->library('opentbs');

		$TBS  = $this->opentbs->get();
		$data = $this->_get_data();

		$TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); // load OpenTBS plugin
		$TBS->LoadTemplate(FCPATH2.'Book1.xlsx');

		$TBS->MergeBlock('block', $data);

		$TBS->Show(OPENTBS_DOWNLOAD, 'New.xlsx');
	}

	function changepic(){
		$check = 'tick.png';
		$list = array(
			'c1' => $check, // <--  this trick to checked the box
			'c2' => '',
			'c3' => '',
			'c4' => '',
			'c5' => ''
		);

		$this->load->library('opentbs');
		$TBS  = $this->opentbs->get();
		$TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); // load OpenTBS plugin
		$TBS->LoadTemplate(FCPATH2.'sample1.docx');

		$TBS->MergeField('list', $list);

		$TBS->Show(OPENTBS_DOWNLOAD, 'sample1_'.time().'.docx');
	}

	function chart(){

		$this->load->library('opentbs');
		$TBS  = $this->opentbs->get();

		$TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); // load OpenTBS plugin
		$TBS->LoadTemplate(FCPATH2.'sample2.docx', OPENTBS_ALREADY_UTF8);

		// Change chart series
		$ChartNameOrNum = 'CHART_HARIAN'; // Title of the shape that embeds the chart

		$SeriesNameOrNum = 'Series 1';
		$NewLegend = "QC";
		$data_qc = array (
			'Hari 1' => 9,
			'Hari 2' => 6,
			'Hari 3' => 4,
			'Hari 4' => 4
		);
		$TBS->PlugIn(OPENTBS_CHART, $ChartNameOrNum, $SeriesNameOrNum, $data_qc, $NewLegend);

		$SeriesNameOrNum = 'Series 2';
		$NewLegend = "UI";
		$data_ui = array (
			'Hari 1' => 8,
			'Hari 2' => 11,
			'Hari 3' => 13,
			'Hari 4' => 6
		);
		$TBS->PlugIn(OPENTBS_CHART, $ChartNameOrNum, $SeriesNameOrNum, $data_ui, $NewLegend);

		$SeriesNameOrNum = 'Series 3';
		$NewLegend = "Provis";
		$data_prov = array (
			'Hari 1' => 6,
			'Hari 2' => 13,
			'Hari 3' => 11,
			'Hari 4' => 6
		);
		$TBS->PlugIn(OPENTBS_CHART, $ChartNameOrNum, $SeriesNameOrNum, $data_prov, $NewLegend);



		$TBS->PlugIn(OPENTBS_DELETE_COMMENTS);
		$TBS->Show(OPENTBS_DOWNLOAD, 'sample2_'.time().'.docx');
	}
}
