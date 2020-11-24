<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

	public function RandomQuoteByInterval($TimeBase, $QuotesArray)
	{
		// Make sure it is a integer
		$TimeBase = intval($TimeBase);

		// How many items are in the array?
		$ItemCount = count($QuotesArray);

		// By using the modulus operator we get a pseudo
		// random index position that is between zero and the
		// maximal value (ItemCount)
		$RandomIndexPos = ($TimeBase % $ItemCount);

		// Now return the random array element
		return $QuotesArray[$RandomIndexPos];
	}

	public function index()
	{

		// Use the day of the year to get a daily changing
		// quote changing (z = 0 till 365)
		$DayOfTheYear = date('z');

		// You could also use:
		//  --> date('m'); // Quote changes every month
		//  --> date('h'); // Quote changes every hour
		//  --> date('i'); // Quote changes every minute

		// Example array with some random quotes
		$RandomQuotes = array(
			'<b>Wash your hands frequently</b><br>
		Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water.',
			'<b>Maintain social distancing</b><br>
		Maintain at least 1 metre (3 feet) distance between yourself and anyone who is coughing or sneezing.',
			'<b>Avoid touching eyes, nose and mouth<b>',
			'<b>Practice respiratory hygiene</b><br>
		Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately.',
			'<b>If you have fever, cough and difficulty breathing, seek medical care early</b><br>
		Stay home if you feel unwell. If you have a fever, cough and difficulty breathing, seek medical attention and call in advance. Follow the directions of your local health authority.',
			'<b>Stay informed and follow advice given by your healthcare provider</b><br>
		Stay informed on the latest developments about COVID-19. Follow advice given by your healthcare provider, your national and local public health authority or your employer on how to protect yourself and others from COVID-19.'
		);

		$QuotesExplanation = array(
			'Washing your hands with soap and water or using alcohol-based hand rub kills viruses that may be on your hands.',
			'When someone coughs or sneezes they spray small liquid droplets from their nose or mouth which may contain virus. If you are too close, you can breathe in the droplets, including the COVID-19 virus if the person coughing has the disease.',
			'Hands touch many surfaces and can pick up viruses. Once contaminated, hands can transfer the virus to your eyes, nose or mouth. From there, the virus can enter your body and can make you sick.',
			'Droplets spread virus. By following good respiratory hygiene you protect the people around you from viruses such as cold, flu and COVID-19.',
			'National and local authorities will have the most up to date information on the situation in your area. Calling in advance will allow your health care provider to quickly direct you to the right health facility. This will also protect you and help prevent spread of viruses and other infections.',
			'National and local authorities will have the most up to date information on whether COVID-19 is spreading in your area. They are best placed to advise on what people in your area should be doing to protect themselves.'
		);

		$quote = $this->RandomQuoteByInterval($DayOfTheYear, $RandomQuotes);
		$quotePlus = $this->RandomQuoteByInterval($DayOfTheYear, $QuotesExplanation);

		$rs = $this->m_artikel->tampil_data();
		foreach ($rs as $data) {
			$idi[] = $data['id'];
			$titlei[] = $data['artikel_judul'];
			$writeri[] = $data['artikel_penulis'];
			$contenti[] = $data['artikel_isi'];
			$timei[] = $data['artikel_waktu'];
			$pathi[] = $data['path_gambar'];
		}

		$data['quote'] = $quote;
		$data['quotePlus'] = $quotePlus;
		$data['judul'] = 'Home';
		$data['idi'] = $idi;
		$data['titlei'] = $titlei;
		$data['writeri'] = $writeri;
		$data['contenti'] = $contenti;
		$data['timei'] = $timei;
		$data['pathi'] = $pathi;

		$this->load->view('template/header', $data);
		$this->load->view('index', $data);
		$this->load->view('template/footer');
	}

	public function data_ID($id)
	{
		$rs = $this->m_artikel->tampil_dataID($id);
		$data['artikel'] = $rs;
		$data['judul']	 = $rs['artikel_judul'];
		$data['allData'] = $this->m_artikel->tampil_data();
		$data['komen']	 = $this->m_artikel->tampil_komentar($id);
		$data['controller'] = $this;
		$this->load->view('template/artikel/header', $data);
		$this->load->view('artikel', $data);
		$this->load->view('template/artikel/widget', $data);
		$this->load->view('template/artikel/footer');
	}

	public function cariArtikel()
	{
		$data['cari'] = $this->input->post('cari');
		if($data['cari']){
			$data['artikel'] = $this->m_artikel->cari_artikel();
			$data['allData'] = $this->m_artikel->tampil_data();
			$data['controller'] = $this;
			$data['judul'] = 'Searching';
			$this->load->view('template/artikel/header', $data);
			$this->load->view('search', $data);
			$this->load->view('template/artikel/widget', $data);
			$this->load->view('template/artikel/footer');
		}
	}

	public function tambahKomentar()
	{
		$idArtikel		= $this->input->post('idArtikel');
		$nama			= 'Anonymous';
		$komentar		= $this->input->post('komen');

		$data = array(
			'idArtikel' => $idArtikel,
			'nama'		=> $nama,
			'isi'		=> $komentar,
		);

		$this->m_artikel->tambah_komentar($data, 'komentar');
		redirect('homepage/data_ID/' . $idArtikel);
	}

	public function tambahDonasi(){
		$name = $this->input->post('name');
		$amount = $this->input->post('amount');

		$data = array(
			'name' 		=> $name,
			'amount'	=> $amount,
		);
		$this->m_artikel->tambah_donasi($data, 'donator');
		redirect('homepage');
	}

	public function kalender($i)
	{
		if (session_status() != 2) {
			session_start();
		}

		function build_calendar($month, $year)
		{
			$daysOfWeek = array('S', 'M', 'T', 'W', 'T', 'F', 'S');
			$firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);
			$numberDays = date('t', $firstDayOfMonth);
			$dateComponents = getdate($firstDayOfMonth);
			$monthName = $dateComponents['month'];
			$dayOfWeek = $dateComponents['wday'];
			$calendar = "<table class='calendar table table-condensed table-bordered'>";
			$calendar .= "<caption>$monthName $year</caption>";
			$calendar .= "<tr>";
			foreach ($daysOfWeek as $day) {
				$calendar .= "<th class='header'>$day</th>";
			}
			$currentDay = 1;
			$calendar .= "</tr><tr>";
			if ($dayOfWeek > 0) {
				$calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>";
			}
			$month = str_pad($month, 2, "0", STR_PAD_LEFT);
			while ($currentDay <= $numberDays) {
				if ($dayOfWeek == 7) {
					$dayOfWeek = 0;
					$calendar .= "</tr><tr>";
				}
				$currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
				$date = "$year-$month-$currentDayRel";

				// Is this today?
				if (date('Y-m-d') == $date) {
					$calendar .= "<td class='day success' rel='$date'><b>$currentDay</b></td>";
				} else {
					$calendar .= "<td class='day' rel='$date'>$currentDay</td>";
				}

				$currentDay++;
				$dayOfWeek++;
			}
			if ($dayOfWeek != 7) {
				$remainingDays = 7 - $dayOfWeek;
				$calendar .= "<td colspan='$remainingDays'>&nbsp;</td>";
			}
			$calendar .= "</tr>";
			$calendar .= "</table>";
			return $calendar;
		}

		$tanggal = getdate();
		$bulan = $tanggal['mon'];
		$tahun = $tanggal['year'];

		if ($i != 0) {
			$_SESSION['i'] += $i;
		}

		if (isset($_SESSION['i'])) {
			$i = $_SESSION['i'];
			$bulan += $i;
			while ($bulan > 12) {
				$bulan -= 12;
				$tahun++;
			}
			while ($bulan < 1) {
				$bulan += 12;
				$tahun--;
			}
		}

		$calendar = build_calendar($bulan, $tahun);
		$calendar = '<div style="width:200px">' . $calendar . '</div>';
		$calendar .= '<style type="text/css">table tbody tr td, table tbody tr th { text-align: center; }</style>';
		echo $calendar;
	}
}
