<?php

class HesapMakinesi
{
    //classımız burada
    private $sayi1;
    private $sayi2;
    private $sonuc;

    function __construct($sayi1,$sayi2)
    {
        $this->setSayi1($sayi1);
        $this->setSayi2($sayi2);
    }
    function setSayi1($sayi1)
    {
       $this->sayi1 = $sayi1;
    }
    function setSayi2($sayi2)
    {
        $this->sayi2 = $sayi2;
    }
    function setSonuc($sonuc)
    {
        $this->sonuc = $sonuc;
    }

    public function getSayi1()
    {
        return $this->sayi1;
    }

    public function getSayi2()
    {
        return $this->sayi2;
    }

    public function getSonuc()
    {
        return $this->sonuc;
    }
    function topla()
    {
        $this->setSonuc(($this->getSayi1()+$this->getSayi2()));
    }

    function cikar()
    {
        $this->setSonuc(($this->getSayi1()-$this->getSayi2()));
    }

    function carp()
    {
        $this->setSonuc(($this->getSayi1()*$this->getSayi2()));
    }

    function bol()
    {
        $this->setSonuc(($this->getSayi1()/$this->getSayi2()));
    }

    function islemYaz()
    {
        echo $this->getSonuc();
    }
    function islemDon()
    {
        return $this->getSonuc();
    }
}

?>
    <!-- diğer htmller başlangıç -->
    <html>
    <head>
        <title>Hesap Makinesi</title>
        <style>
            input{width: 50px}
            select{width: 60px}
            .hesap{width: 500px;margin:0 auto;border:1px #dd6600 solid;padding:20px;background:#ccc;}
        </style>
    </head>
    <body>
    <div class="hesap">
    <!-- diğer htmller bitiş -->

    <!-- Form Başla -->
        <form method="post" action="">
            Sayı 1: <input type="text" name="sayi1"/>
            <select name="islem">
                <option value="">İşlem</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            Sayı 2: <input type="text" name="sayi2" />
            <button type="submit">Hesapla</button>
        </form>
        <!-- Form Bitiş -->

<?php
//
if($_POST)
{
    //Eğer formumuz post edildiyse class tanımlamalar ve işlemler
    $sayi1 = intval($_POST['sayi1']);
    $sayi2 = intval($_POST['sayi2']);
    $islem = $_POST['islem'];
    $hesap = new HesapMakinesi($sayi1,$sayi2);
    switch($islem) {
        case '+':
             $hesap->topla();
            break;
            case '-':
                $hesap->cikar();
                break;

                case '*':
                    $hesap->carp();
                    break;
                        case '/':
                            $hesap->bol();
					    break;
					    default:
					        $hesap->setSonuc(0);
						    echo 'Lütfen adam gibi işlem seçin';
					        break;
				}
				$hesap->islemYaz();

}
?>
        <!-- html kodlarını kapatma başlangıç -->
    </div>
    </body>
    </html>
    <!-- html kodlarını kapatma başlangıç -->
