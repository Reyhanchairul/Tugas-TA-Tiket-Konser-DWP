<html>
<head>
    
    <title>Tiket Konser DWP</title>


</head>
<body background="konser111.jpg">

    <form action="Hasil.php" method="post">
        <table align="center" border="5" cellpadding="15" cellspacing="1" bgcolor="Gold" bordercolor="Maroon">
            <tr>
          <th align="center" colspan="2">Tiket Konser DWP</th></tr>
            <tr><td>Nama Pembeli</td><td><input type="text" name="nama_pembeli" maxlength="10" size="15"></td></tr>
            <tr>
                <td>Jenis Tiket</td>
                <td><select name="Jenis">
                <option value="VVIP">
                VVIP </option>
                <option value="Red">
                Red </option>
                <option value="Yellow">
                Yellow </option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Waktu</td>
                <td>
                    <select name="Waktu">
                        <option value="Combo"> 1 - Combo </option>
                        <option value="Minggu"> 2 - Minggu </option>
                        <option value="Sabtu"> 3 - Sabtu </option>
                    </select>
                </td>
            </tr>
            <tr><td>Merchandise</td>
            <td>
            <input type="radio" name="Merchandise" value="Ya"> Ya
            <input type="radio" name="Merchandise" value="Ndak"> Tidak
          
            
            </script>
            </td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="Proses"></td></tr>
        </table>
    </form>
   
    <br>
   
    <table align="center" border="2" cellpadding="5" cellspacing="1"  bgcolor="#CCCCCC" bordercolor="#FFFFFF">
        <tr>
          <th align="center" colspan="4">Daftar Harga Tiket Konser DWP</th></tr>
        <tr>
          <td>Jenis / Waktu</td>
          <td align="center">3 - Sabtu</td>
          <td align="center">2 - Minggu</td>
      <td>1 - Combo</td>    </tr>
        <tr>
          <td>VVIP</td><td align="center">2000000</td><td align="center">2000000</td>
          <td>2500000</td></tr>
        <tr>
          <td>Red</td>
        <td align="center">1200000</td>
        <td align="center">1200000</td>
        <td>1500000</td></tr>
        <tr>
          <td>Yellow</td>
      <td align="center">750000</td>
      <td align="center">750000</td>
      <td>1000000</td></tr>
        <tr><td colspan="4">Jika dengan Merchandise tambah 90000</td></tr>
    </table>

</body>
</html>