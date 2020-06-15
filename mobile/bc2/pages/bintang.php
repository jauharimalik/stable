<?php 
$text = "{Jual|Tersedia|Promo} Mesin {Foto Copy| Fotocopy|Fotokopi|Foto Kopi} Seiring perkembangan {Zaman|Tekhnologi}, mesin {Foto Copy| Fotocopy|Fotokopi|Foto Kopi} {bahkan|malah|malahan} mengalami perubahan yang {demikian itu|semacam itu|seperti itu} {kencang|cepat} dari {permulaan} {cuma} {dapat} {Foto Copy| Fotocopy|Fotokopi|Foto Kopi} dengan {Zaman|Tekhnologi} {simpel} {kini} {telah} multifungsi, {dapat} print, scan {pun|malah|malahan} fax. {Kecuali} itu {Zaman|Tekhnologi} tercanggih {ialah|merupakan|yaitu|yakni} mengirim {e-mail|surel|surat elektronik} (Electronic Mail) {lewat|via|melewati} mesin {Foto Copy| Fotocopy|Fotokopi|Foto Kopi} {lantas|segera|seketika} sehingga lebih praktis dan efisien. {Zaman|Tekhnologi} {Zaman|Tekhnologi} baru {kian} di kembangkan mulai dari {Zaman|Tekhnologi} mekanik {sampai} {digital} yang {amat|benar-benar|sungguh-sungguh|betul-betul} canggih {mempermudah} orang dalam menggKamukan dokumen mereka.
Dewasa ini mesin {Foto Copy| Fotocopy|Fotokopi|Foto Kopi} {amat|benar-benar|sungguh-sungguh|betul-betul} {diperlukan} di {pelbagai|beragam|bermacam-macam|beraneka|bermacam|berjenis-jenis} kalangan masyarakat, mulai dari perumahan {sampai} ke kantor-kantor besar. {Kondisi|Situasi} ini yang {dapat} di anggap {kesempatan|kans} bagi para wirausahawan dengan {metode|sistem} membuka jasa {Foto Copy| Fotocopy|Fotokopi|Foto Kopi} seperti yang {acap kali|sering kali|tak jarang|kerap|kerap kali} kita lihat di {kios|warung}-{kios|warung}/ruko sekitar kita, dengan logo Neonbox dan Spanduk {menggambarkan|membuktikan} adanya jasa {Foto Copy| Fotocopy|Fotokopi|Foto Kopi} {biasa|lazim|awam}.

{Tidak} terkecuali di {kawasan} Kota Semarang yang {kian} hari {kian} berkembang pastilah {membutuhkan} mesin {Foto Copy| Fotocopy|Fotokopi|Foto Kopi} untuk {mendukung|menyokong|mendorong|mensupport} {aktivitas|kesibukan}-{aktivitas|kesibukan} perkantoran atau sekolah. Bagi Kamu yang {memerlukan|membutuhkan} mesin {Foto Copy| Fotocopy|Fotokopi|Foto Kopi} untuk {tempat|lokasi} Semarang kami PT. Vanectro Andalan Nusantara yang berkantor di Jakarta siap mengirim mesin {Foto Copy| Fotocopy|Fotokopi|Foto Kopi} {sampai} Semarang {menerapkan|memakai|mengaplikasikan} jasa Expedisi. {Kalau|Jikalau|Bila|Apabila|Seandainya|Sekiranya} dan {berharap|mau|berkeinginan} {memperhatikan|mengamati|Menginginkan} secara {lantas|segera|seketika} produk-produk kami {dapat} datang ke Showroom kami di Jl. Cipinang Besar Selatan No. 9 Jatinegara – Jakarta Timur.

Atau {kalau|jikalau|bila|apabila|seKamuinya|sekiranya} Kamu {tak} sempat datang, cukup telepon marketing kami untuk bertanya {keperluan} mesin {Foto Copy| Fotocopy|Fotokopi|Foto Kopi} yang Kamu inginkan, kemudian transaksi {dapat} secara online {adalah|ialah|merupakan|yakni} transfer ke Rekening Perusahaan kami.

{Sebagian} {anjuran|saran} type mesin untuk {keperluan} Kamu.

Type-type Untuk Usaha

Mesin {Foto Copy| Fotocopy|Fotokopi|Foto Kopi} untuk usaha mulai dari pemula {sampai} expert {lazimnya|umumnya} {menerapkan|memakai|mengaplikasikan} mesin {Foto Copy| Fotocopy|Fotokopi|Foto Kopi} rekondisi dengan type antara lain sebagai berikut:"; 
$words = explode("{",$text); 
foreach ($words as $word) 
{ 
    $words = explode("}",$word); 
    foreach ($words as $word) 
    { 
        $words = explode("|",$word); 
        $word = $words[array_rand($words, 1)];         
        echo $word." "; 
    } 
  
} 
?> 