<?php
// built-in function

# function date
// l -> day name
// l -> date
// l -> Month |ket: menunjukan bulan tapi huruf
// l -> month |ket: menunjukan bulan tapi angka

// echo date("m");
// echo "\n";
// echo date("1, m M Y");

# function time 
echo time(); # unixtimestamp
echo "\n";
echo date("1", time());
echo "\n";
echo date("1", time()+60*60*24*100);
//  - 60 -> detik 
//  - 60 -> jam
//  - 24 -> jam dlm sehari
//  - 2-> hari yang mau ditebak

echo date("d M Y", time()-60*60*24*100);

# MKTIME | jam, menit, detik, bulan, tanggal, tahun
// echo mktime (0,0,0,0,0,0)
echo "\n";
echo date("1", mktime(0,0,0,1,16,1999));
echo "\n";

# strtotime
echo strtotime("4 Feb 2007");
echo date("1", strtoitime("4 Feb 2007"));





?>