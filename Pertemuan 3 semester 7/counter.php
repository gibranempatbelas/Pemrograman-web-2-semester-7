<html>
    <head>
        <title>Contoh Counter</title>
    </head>
    <body>
        <?php
            $tesfile="counter.dat";
            if (file_exist($tesfile))
            {
                $berkas = fopen($tesfile,"r");
                $pencacah = (integer)trim(fget($berkas, 255));
                $pencacah++;
                Fclose($berkas);
            }
            Else
            $pencacah = 1;
//simpan pencacah
            $berkas = fopen($tesfile,"W");
            Fputs($berkas, $pencacah);
            Fclose($berkas);
//tulis ke halaman web
Print("Anda pengunjung ke-$pencacah<br>\n"); ?>
    </body>
</html>