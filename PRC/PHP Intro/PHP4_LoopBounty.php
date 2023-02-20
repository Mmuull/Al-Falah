<?php
    
    //BOUNTY
    
    $keranjang = array();
    $lemari = array('Minyak', 'Tepung', 'Telur', 'Mentega', 'Gula', 'Garam');
    $ambil = array('Tepung', 'Mentega', 'Gula');

    $index_lemari = 0;
    $index_keranjang = 0;
    echo 'Keranjang awal : '; var_dump($keranjang); echo '<br>';
    while($index_lemari <= count($lemari))
    {
        if($ambil[$index_keranjang] == $lemari[$index_lemari])
        {
            $keranjang[$index_keranjang] = $lemari[$index_lemari];
            unset($lemari[$index_lemari]);
            echo 'Memasukkan '.$keranjang[$index_keranjang].' ke dalam keranjang <br>';
            $index_keranjang ++;
        }
        $index_lemari ++;
    }
    echo 'Keranjang akhir : '; var_dump($keranjang); echo '<br>';
    echo 'Lemari : '; var_dump($lemari); echo '<br>';


    
?>