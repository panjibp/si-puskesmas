<!DOCTYPE html>
<html>
<head>
	<title>Laporan.php</title>
    <style>
        td {
            text-align: center;
        }
    </style>
</head>
<body>

<table border="0" cellspasing=0 cellpadding=0 width="100%">
	<tr>
      <td width="25%" align="center"><img src="<?= base_url('picture/logo2.png') ?>" height="90px"></td>
      <td width="50%" align="center" style="font-family: Arial;">
      <p style="text-align: center; line-height: 1.3;">
        <span><b>PUSKESMAS DESA MUNJUL<br>
        Jln. Raya Munjul, Desa Munjul, Kec. Solear<br></b></span>
        Tangerang, Banten 15730
      </p>
      </td>
      <td width="25%" align="center"><img src="<?= base_url('picture/logo.png') ?>" height="90px"></td>
    </tr>
    <tr>
      <td colspan="3" align="center"><strong><hr></strong></td>
    </tr>
    <tr>
      <td colspan="3" align="center">
        <p>
        	<b>DATA KELUHAN PASIEN</b>
        	<br>
            <br>
        </p>
      </td>
    </tr>
	<table border="1" style="border-collapse: collapse; width: 100%">
	    <thead>
            <tr>
            <th>No.</th>
            <th>Nama Pasien</th>
            <th>Tanggal</th>
            <th>Diagnosa</th>
            <th>Obat</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1;
            foreach ($keluhan as $k) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $k->nama; ?></td>
                    <td><?= dateFormat('d-m-Y', $k->tanggal); ?></td>
                    <td><?= $k->diagnosa; ?></td>
                    <td><?= $k->obat; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</table>

    <script>
    	window.print();
    </script>

</body>
</html>