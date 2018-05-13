<?php

$iller = array('Adana', 'Adıyaman', 'Afyon', 'Ağrı', 'Amasya', 'Ankara', 'Antalya', 'Artvin',
'Aydın', 'Balıkesir', 'Bilecik', 'Bingöl', 'Bitlis', 'Bolu', 'Burdur', 'Bursa', 'Çanakkale',
'Çankırı', 'Çorum', 'Denizli', 'Diyarbakır', 'Edirne', 'Elazığ', 'Erzincan', 'Erzurum', 'Eskişehir',
'Gaziantep', 'Giresun', 'Gümüşhane', 'Hakkari', 'Hatay', 'Isparta', 'Mersin', 'İstanbul', 'İzmir', 
'Kars', 'Kastamonu', 'Kayseri', 'Kırklareli', 'Kırşehir', 'Kocaeli', 'Konya', 'Kütahya', 'Malatya', 
'Manisa', 'Kahramanmaraş', 'Mardin', 'Muğla', 'Muş', 'Nevşehir', 'Niğde', 'Ordu', 'Rize', 'Sakarya',
'Samsun', 'Siirt', 'Sinop', 'Sivas', 'Tekirdağ', 'Tokat', 'Trabzon', 'Tunceli', 'Şanlıurfa', 'Uşak',
'Van', 'Yozgat', 'Zonguldak', 'Aksaray', 'Bayburt', 'Karaman', 'Kırıkkale', 'Batman', 'Şırnak',
'Bartın', 'Ardahan', 'Iğdır', 'Yalova', 'Karabük', 'Kilis', 'Osmaniye', 'Düzce');
?>
<form method="get" action="">
    <select name="sehir" onchange="this.form.submit();">
        <option>İl Seçin</option>
        <?php foreach($iller as $i):?>
                <option value="<?php echo $i?>"
                       <?php if(isset($_GET['sehir']) && $_GET['sehir']==$i):?>selected="selected"<?php endif;?> 
                    ><?php echo $i?></option>
        <?php endforeach;?>

    </select>

</form>
<?php if(isset($_GET['sehir'])):
$sehir = strtolower($_GET['sehir']);
    $link = 'http://api.openweathermap.org/data/2.5/weather?q='.$sehir.'&appid=ee6daae45f84924bf5d1289d9e30b101&units=metric';
    $baglan = json_decode(file_get_contents($link));

    ?>
    <h2><?php echo $baglan->name;?></h2>
Hava Durumu = <?php echo $baglan->weather[0]->main.' - '.$baglan->weather[0]->description;?><br/>
Asgari - Azami Sıcaklık Değerleri : <?php echo $baglan->main->temp_min.' C - '.$baglan->main->temp_max.' C';?><br/>
Gün Doğumu : <?php echo date('H:i:s',$baglan->sys->sunrise);?> <br/>
Gün Batımı : <?php echo date('H:i:s',$baglan->sys->sunset);?> <br/>
Nem Oranı: % <?php echo $baglan->main->humidity?>
<?php endif;?>