<html>
<head>
    <title>Hasil Pemesanan Tiket Konser DWP</title>
</head>
<body background="konser222.jpg">

    <?php

    for($i = 0; $i < 2; $i++){
      echo "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br/>" ;
     

    }
    // mmbuat fungsi
     function perkenalan($nama, $salam){
      echo $salam.", ";
      echo "Saya ".$nama."<br/>"; 
      echo "Terima kasi telah mempercayai web kami, Have Fun !<br/>";
    }

    // memanggil fungsi yang sudah dibuat
    perkenalan("Agent Tiket Konser", "Hi Kawla Muda");

      echo "<hr>";

    for($i = 0; $i < 9; $i++){
      echo "----------------------------" ;
    }
     
    
        //Tangkap Variable
        $nama_Tiket = $_POST["nama_pembeli"];
        $kode_Tiket = $_POST["Jenis"];
        $kelas_Tiket = $_POST["Waktu"];
        $merch_Tiket = $_POST["Merchandise"];
       
        //Rumus untuk menentukan harga Jenis Tiket
        if ($kode_Tiket == 'VVIP')
        {
            if ($kelas_Tiket == 'Combo') {$harga_Tiket = 2500000;}
           
                else if ($kelas_Tiket == 'Minggu') {$harga_Tiket = 2000000;} else { $harga_Tiket = 2000000;}
           
        }
        else if ($kode_Tiket == 'Red')
        {
            if ($kelas_Tiket == 'Combo') { $harga_Tiket = 1500000;}
           
                else if ($kelas_Tiket == 'Minggu') {$harga_Tiket = 1250000;} else { $harga_Tiket = 1250000;}
           
        }
        else
        {
            if ($kode_Tiket == 'Yellow') { $harga_Tiket = 1000000; }
           
                else if ($kelas_Tiket == 'Minggu') {$harga_Tiket = 750000;} else { $harga_Tiket = 750000; }
           
        } ;

           

       
        //logika Merch
        if ($merch_Tiket == 'Ya') {$tambahan_Tiket = 90000;} else {$tambahan_Tiket = 0;}
       
       
        //Grand Total
        $total_Tiket = $harga_Tiket + $tambahan_Tiket;
       
    ?>
   
    <table align="center" border="1" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC" bordercolor="#FFFFFF">
        <tr>
          <th align="center" colspan="2">Tiket Konser DWP</th></tr>
        <tr>
          <td colspan="2" align="center">Bukti Pembelian Tiket Konser DWP Atas nama <?php print $nama_Tiket; ?>, Berikut Ini Info Pembelian Anda</td></tr>
        <tr>
          <td>Jenis</td><td align="center"><?php print $kode_Tiket ?></td></tr>
  
        <tr>
          <td>Waktu</td><td align="center"><?php print $kelas_Tiket ?></td></tr>
        <tr>
          <td>Merchandise</td><td align="center"><?php print $merch_Tiket ?></td></tr>
        <tr>
          <td>Harga Satuan</td><td align="center"><?php print $harga_Tiket ?></td></tr>
        <tr>
          <td>Biaya tambahan</td><td align="center"><?php print $tambahan_Tiket ?></td></tr>
        <tr>
          <th align="left">Total</th><th align="center"><?php print $total_Tiket ?></th></tr>
        <tr><td colspan="2" align="center">Terima Kasih :* <?php print $nama_Tiket ?> Karena Telah Berbelanja Di Website Kami.</td></tr>
        
    </table>
</body>
</html>