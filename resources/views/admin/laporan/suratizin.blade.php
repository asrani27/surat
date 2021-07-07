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
		<hr /><strong>LAPORAN SURAT IZIN<br />
		tgl cetak : {{\Carbon\Carbon::today()->format('d M Y')}}<br />
		</strong>
		<br />
		<table cellpadding="3" cellspacing="0" class="auto-style8" style="width: 100%">
			<tr>
				<td class="auto-style10" style="height: 24px;text-align: center"><strong>No</strong></td>
				<td class="auto-style10" style="height: 24px;text-align: center"><strong>Tanggal</strong></td>
				<td class="auto-style10" style="height: 24px;text-align: center"><strong>No Surat</strong></td>
				<td class="auto-style10" style="height: 24px;text-align: center"><strong>Perihal</strong></td>
				<td class="auto-style10" style="height: 24px;text-align: center"><strong>Tujuan</strong></td>
				<td class="auto-style10" style="height: 24px;text-align: center"><strong>Kegiatan</strong></td>
				<td class="auto-style10" style="height: 24px;text-align: center"><strong>Tgl Kegiatan</strong></td>
				<td class="auto-style10" style="height: 24px;text-align: center"><strong>Waktu Kegiatan</strong></td>
				<td class="auto-style10" style="height: 24px;text-align: center"><strong>Tempat</strong></td>
			</tr>
                @php
                    $no =1;
                @endphp
                @foreach ($data as $item)
                    
                <tr>
                    <td class="auto-style10">{{$no++}}</td>
                    <td class="auto-style10">{{$item->tanggal}}</td>
                    <td class="auto-style10">{{$item->no_surat}}</td>
                    <td class="auto-style10">{{$item->perihal}}</td>
                    <td class="auto-style10">{{$item->tujuan}}</td>
                    <td class="auto-style10">{{$item->kegiatan}}</td>
                    <td class="auto-style10">{{$item->tanggal_kegiatan}}</td>
                    <td class="auto-style10">{{$item->jam_kegiatan}}</td>
                    <td class="auto-style10">{{$item->tempat}}</td>
                </tr>
                @endforeach
		</table>
		<br />
		<br />
		<br />
		<br />
		<br />

		</td>
	</tr>
</table>

</body>

</html>
