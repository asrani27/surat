<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>APK</title>
<style type="text/css">
.auto-style1 {
	text-align: center;
	border-style: solid;
	border-width: 1px;
}
.auto-style2 {
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
	font-size: large;
}
.auto-style3 {
	border: 3px solid #000000;
}
.auto-style7 {
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
	font-size: small;
}
.auto-style8 {
	border: 1px solid #000000;
}
.auto-style10 {
	border-style: solid;
	border-width: 1px;
}
.auto-style11 {
	text-align: right;
}
</style>
</head>

<body>

<table cellpadding="2" class="auto-style3" style="width: 100%">
	<tr>
		<td class="auto-style1" style="height: 268px">
		<table style="width: 100%">
			<tr>
				<td style="width: 45px">
				<img alt="" height="95" src="https://kalteng.kemenag.go.id/assets/images/icon/kemenag_logo.png" width="107" /></td>
				<td style="text-align: center"><strong>
		<span class="auto-style2">DEPARTEMEN AGAMA<br />
				KABUPATEN KAPUAS KALIMANTAN TENGAH</span><span class="auto-style7"><br />
				Jl. Tambun Bungai No.16 Kuala Kapuas - Kalimantan Tengah</span></strong></td>
                <td style="width: 10%"></td>
			</tr>
		</table>
		<hr /><strong>LAPORAN EVALUASI KINERJA PEGAWAI<br />
		tgl cetak : {{\Carbon\Carbon::today()->format('d M Y')}}<br />
		<br />
		</strong>
        <table style="width: 100%">
			<tr>
				<td class="auto-style11" style="width: 259px"><strong>PERIODE</strong></td>
				<td style="width: 259px"><strong>: {{$periode}}</strong></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td class="auto-style11" style="height: 26px; width: 259px">
				<strong>NIK</strong></td>
				<td style="height: 26px; width: 259px"><strong>: {{$pegawai->nip}}</strong></td>
				<td style="height: 26px"></td>
				<td style="height: 26px"></td>
			</tr>
			<tr>
				<td class="auto-style11" style="width: 259px"><strong>NAMA</strong></td>
				<td style="width: 259px"><strong>: {{$pegawai->nama}}</strong></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td class="auto-style11" style="width: 259px"><strong>TANGGAL 
				CETAK</strong></td>
				<td style="width: 259px"><strong>: {{\Carbon\Carbon::today()->format('d/m/Y')}}</strong></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</table>
		
		<br />
		<table cellpadding="3" cellspacing="0" class="auto-style8" style="width: 100%">
			<tr>
				<td class="auto-style10" style="height: 24px;text-align: center"><strong>No</strong></td>
				<td class="auto-style10" style="height: 24px;text-align: center"><strong>Nama Aspek</strong></td>
				<td class="auto-style10" style="height: 24px;text-align: center"><strong>Indikator</strong></td>
				<td class="auto-style10" style="height: 24px;text-align: center"><strong>Nilai</strong></td>
			</tr>
                @php
                    $no =1;
                @endphp
                @foreach ($data as $item)
                    
                <tr>
                    <td class="auto-style10">{{$no++}}</td>
                    <td class="auto-style10">{{$item->kpi->nama_aspek}}</td>
                    <td class="auto-style10">{{$item->kpi->indikator}}</td>
                    <td class="auto-style10">{{$item->nilai}}</td>
                </tr>
                @endforeach
		</table>
		<br /><br />
		<table style="width: 100%">
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td style="width: 840px">&nbsp;</td>
				<td>Kapuas, {{\Carbon\Carbon::today()->format('d/m/Y')}}<br />
				Mengetahui,<br />
				Kepala Dinas<br />
				<br />
				<br />
				<br />
				H. Asyhadi, MPd<br />
				NIP : xxxxxxxxxxxxxxxxx<br />
				</td>
			</tr>
		</table>

		<br />
		<br />
		<br />
		<br />

		</td>
	</tr>
</table>

</body>

</html>
