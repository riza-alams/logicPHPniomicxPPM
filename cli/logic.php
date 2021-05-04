<?php

class Logic
{
    public function __construct($soal)
    {
        switch ($soal) {
            case '1':
                $this->soalno1();
                break;
                case '2':
                $this->soalno2();
                break;
                case '3':
                $this->soalno3();
                break;
                case '4':
                $this->soalno4();
                break;
             case '5':
                  $this->soalno5();
                break;
                                               
            default:
                echo 'soal tidak ditemukan'.PHP_EOL;
                break;
        }
    }

    public function soalno1()
    {
        echo '---- Soal Perhitungan No 1 ----'.PHP_EOL;
      $price = readline('masukan harga :');
      $qty = readline('masukan qty :');
      if (!empty($price) || !empty($qty)) {
         $total = $price * $qty;
         $amount = readline('masukan Uang Diterima Minimal Rp.'.$total.':');
         if ($amount < $total || empty($amount)) {
            echo'Uang diterima tidak boleh lebih kecil dari total dan tidak boleh ksoong'.PHP_EOL;
         }else{
            echo'Total : '.$total.PHP_EOL;
             $kembalian = $amount - $total;

             echo'Kembalian : '.$kembalian.PHP_EOL;
         }
      }else{
          echo'data tidak boleh kosong';
      }
    }
    public function soalno2()
    {
        // ini bukan total contoh punya 10ribu 1 lembar 20k 2lembar jadi total nya ada 2lembar uang unique
        $lembar = readline('berapa banyak uang lembar mu ?');
        $array = [];
        if (!empty($lembar) || $lembar < 1) {
            echo '++++ Mohon Tunggu ++++ '.PHP_EOL;

            for ($i=0; $i < $lembar; $i++) { 
                    $nominal = readline('berapa nominal uang lembar mu : ');

                 $jumlah_lembar = readline('berapa Lembar uang '.$nominal.' mu : ');
                $data = [
                    'jumlah_lembar' => $jumlah_lembar,
                    'nominal' => $nominal,
                ];
                array_push($array,$data);
            }
           $sum = array_sum(array_map(function($item) { 
                return $item['nominal'] * $item['jumlah_lembar']; 
            }, $array));
            echo 'total Uang mu adalah : '.$sum.PHP_EOL;
            $belanja = readline('masukan jumlah nominal belanja :');
            if (!empty($belanja) || !$belanja > $sum) {
                $sisa = $sum - $belanja;
                echo 'Sisa Uang mu adalah '.$sisa;
            }else{
                echo 'Uang mu Tidak Cukup/Nominal Belanja Tidak Boleh kosong';
            }
        }else{
            echo'data tidak boleh kosong dan tidak boleh lebih kecil dari 1'.PHP_EOL;

        }
    }
    public function soalno3()
    {
        $cbg = readline('berapa banyak cabang mu ? :');
        $net_profit = readline('berapa banyak pengeluaran percabang mu ? :');
        $pengeluaran_toko = readline('');

    }
    public function soalno4()
    {
     echo 'jawaban belum ketemu'.PHP_EOL;
    }
    public function soalno5()
    {
        $list = [
            'Makanan' => [
                'Menu Makanan 1',
                'Menu Makanan 2',
                'Menu Makanan 3',
            ],
            'Minuman' => [
                'Menu Minuman 1',
                'Menu Minuman 2',
                'Menu Minuman 3',
            ],
            'Parsel' => [
                'Menu Parsel 1',
                'Menu Parsel 2',
                'Menu Parsel 3',
            ],
        ];
        $menu = readline('tampilkan semua menu (y/n) :');
        if ($menu == 'y') {
            foreach ($list as $key => $value) {
                echo $key.PHP_EOL;
                foreach ($value as $index => $data) {
                    echo $index + 1 .' '.$data.PHP_EOL;
                }
            }
        }else if($menu == 'n'){
            $kat = readline('Masukan Kategory (Makanan/Minuman/Parsel):');

          if (isset($list[$kat])) {
            echo $kat.PHP_EOL;

            foreach ($list[$kat] as $index => $data) {

                echo $index + 1 .' '.$data.PHP_EOL;
            }
          }else{
            echo 'command Ketegory Not found'.PHP_EOL;

          }
        }else{
            echo 'command not found'.PHP_EOL;
        }
    }
}
