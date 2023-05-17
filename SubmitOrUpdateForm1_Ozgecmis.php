<?php
require_once("config-students.php");
?>

<?php
if (isset($_POST)) {
    if (isset($_POST['isUpdate'])) {
        $stmt = $db->prepare("UPDATE form1_ozgecmis SET
                ad_soyad = ?,
                dogum_yeri = ?,
                yas = ?,
                cinsiyet = ?,
                medeni_durum = ?,
                meslek = ?,
                egitim_durumu = ?,
                protocol_file_no = ?,
                yatis_tarihi = ?,
                bolum = ?,
                tibbi_tani = ?,
                doktor_ad_soyad = ?,
                cocuk_sayisi = ?,
                sosyal_guvencesi = ?,
                sosyal_guvence_diger = ?,
                dil = ?,
                TercumanGereksinimi = ?,
                t_diger = ?,
                TransfuzyonYapilma = ?,
                yatisdiger = ?,
                TransfuzyonReaksiyonu = ?,
                reaksiyon_diger = ?,
                BilgiKisisi = ?,
                kisi_diger = ?,
                kolbandi = ?,
                kolbandiaciklama = ?,
                adsoyadyakin = ?,
                yakinlikderece = ?,
                telefonyakin = ?,
                adresyakin = ?,
                YatisDurumu = ?,
                yatis_durumu_diger = ?,
                yatis_yili = ?,
                yatis_suresi = ?,
                yatis_nedeni = ?,
                GetirdigiHastaliklar = ?,
                hastalik_diger = ?,
                GetirdigiAmeliyatlar = ?,
                ameliyat_diger = ?,
                GetirdigiKazalar = ?,
                kaza_diger = ?,
                BulasiciHastalik = ?,
                bulasici_diger = ?,
                AlerjikReaksiyon = ?,
                alerji_diger = ?,
                Allerjen = ?,
                Belirtiler = ?,
                Tedavi = ?,
                KullanilanIlaclar = ?,
                ilaclar_diger = ?,
                IlacAdi = ?,
                Recete = ?,
                KullanimSuresi = ?,
                Dozu = ?,
                Sikligi = ?,
                AlinisYolu = ?,
                Suresi = ?,
                KullandigiAraclar = ?,
                araclar_diger = ?,
                Gozluk = ?,
                KontaktLens = ?,
                IsitmeCihazi = ?,
                Sag = ?,
                Sol = ?,
                DisProtezi = ?,
                TekerlekliSandalye = ?,
                Baston = ?,
                Yurutec = ?,
                KoltukDegnegi = ?,
                protez_diger = ?,
                Aliskanliklar = ?,
                aliskanlik_diger = ?,
                Sigara = ?,
                SMiktar = ?,
                SKullanimSureci = ?,
                Alkol = ?,
                AMiktar = ?,
                AKullanimSureci = ?,
                Cay = ?,
                CMiktar = ?,
                CKullanimSureci = ?,
                Kahve = ?,
                KMiktar = ?,
                KKullanimSureci = ?,
                DDiger = ?,
                DMiktar = ?,
                DKullanimSureci = ?,
                AileviSaglik = ?,
                ailevi_diger = ?,
                YakinlikDerecesi = ?,
                Tanisi = ?,
                GeldigiYer= ?,
                yer_diger = ?,
                GelisSekli = ?,
                gelis_diger = ?,
                Sikayetler = ?,
                TibbiTani = ?
                WHERE form_id = ?");

$stmt->execute([
                $_POST["ad_soyad"],
                $_POST["dogum_yeri"],
                $_POST["yas"],
                $_POST["cinsiyet"],
                $_POST["medeni_durum"],
                $_POST["meslek"],
                $_POST["egitim_durumu"],
                $_POST["protocol_file_no"],
                $_POST["yatis_tarihi"],
                $_POST["bolum"],
                $_POST["tibbi_tani"],
                $_POST["doktor_ad_soyad"],
                $_POST["cocuk_sayisi"],
                $_POST["sosyal_guvencesi"],
                $_POST["sosyal_guvence_diger"],
                $_POST["dil"],
                $_POST["TercumanGereksinimi"],
                $_POST["t_diger"],
                $_POST["TransfuzyonYapilma"],
                $_POST["yatisdiger"],
                $_POST["TransfuzyonReaksiyonu"],
                $_POST["reaksiyon_diger"],
                $_POST["BilgiKisisi"],
                $_POST["kisi_diger"],
                $_POST["kolbandi"],
                $_POST["kolbandiaciklama"],
                $_POST["adsoyadyakin"],
                $_POST["yakinlikderece"],
                $_POST["telefonyakin"],
                $_POST["adresyakin"],
                $_POST["YatisDurumu"],
                $_POST["yatis_durumu_diger"],
                $_POST["yatis_yili"],
                $_POST["yatis_suresi"],
                $_POST["yatis_nedeni"],
                $_POST["GetirdigiHastaliklar"],
                $_POST["hastalik_diger"],
                $_POST["GetirdigiAmeliyatlar"],
                $_POST["ameliyat_diger"],
                $_POST["GetirdigiKazalar"],
                $_POST["kaza_diger"],
                $_POST["BulasiciHastalik"],
                $_POST["bulasici_diger"],
                $_POST["AlerjikReaksiyon"],
                $_POST["alerji_diger"],
                $_POST["Allerjen"],
                $_POST["Belirtiler"],
                $_POST["Tedavi"],
                $_POST["KullanilanIlaclar"],
                $_POST["ilaclar_diger"],
                $_POST["IlacAdi"],
                $_POST["Recete"],
                $_POST["KullanimSuresi"],
                $_POST["Dozu"],
                $_POST["Sikligi"],
                $_POST["AlinisYolu"],
                $_POST["Suresi"],
                $_POST["KullandigiAraclar"],
                $_POST["araclar_diger"],
                $_POST["Gozluk"],
                $_POST["KontaktLens"],
                $_POST["IsitmeCihazi"],
                $_POST["Sag"],
                $_POST["Sol"],
                $_POST["DisProtezi"],
                $_POST["TekerlekliSandalye"],
                $_POST["Baston"],
                $_POST["Yurutec"],
                $_POST["KoltukDegnegi"],
                $_POST["protez_diger"],
                $_POST["Aliskanliklar"],
                $_POST["aliskanlik_diger"],
                $_POST["Sigara"],
                $_POST["SMiktar"],
                $_POST["SKullanimSureci"],
                $_POST["Alkol"],
                $_POST["AMiktar"],
                $_POST["AKullanimSureci"],
                $_POST["Cay"],
                $_POST["CMiktar"],
                $_POST["CKullanimSureci"],
                $_POST["Kahve"],
                $_POST["KMiktar"],
                $_POST["KKullanimSureci"],
                $_POST["DDiger"],
                $_POST["DMiktar"],
                $_POST["DKullanimSureci"],
                $_POST["AileviSaglik"],
                $_POST["ailevi_diger"],
                $_POST["YakinlikDerecesi"],
                $_POST["Tanisi"],
                $_POST["GeldigiYer"],
                $_POST["yer_diger"],
                $_POST["GelisSekli"],
                $_POST["gelis_diger"],
                $_POST["Sikayetler"],
                $_POST["TibbiTani"]
            ]);
            echo  "successfully updated";
        }
        else {
            $stmt = $db->prepare("INSERT INTO form1_ozgecmis (
                ad_soyad,
                dogum_yeri,
                yas,
                cinsiyet,
                medeni_durum,
                meslek,
                egitim_durumu,
                protocol_file_no,
                yatis_tarihi,
                bolum,
                tibbi_tani,
                doktor_ad_soyad,
                cocuk_sayisi,
                sosyal_guvencesi,
                sosyal_guvence_diger,
                dil,
                TercumanGereksinimi,
                t_diger,
                TransfuzyonYapilma,
                yatisdiger,
                TransfuzyonReaksiyonu,
                reaksiyon_diger,
                BilgiKisisi,
                kisi_diger,
                kolbandi,
                kolbandiaciklama,
                adsoyadyakin,
                yakinlikderece,
                telefonyakin,
                adresyakin,
                YatisDurumu,
                yatis_durumu_diger,
                yatis_yili,
                yatis_suresi,
                yatis_nedeni,
                GetirdigiHastaliklar,
                hastalik_diger,
                GetirdigiAmeliyatlar,
                ameliyat_diger,
                GetirdigiKazalar,
                kaza_diger,
                BulasiciHastalik,
                bulasici_diger,
                AlerjikReaksiyon,
                alerji_diger,
                Allerjen,
                Belirtiler,
                Tedavi,
                KullanilanIlaclar,
                ilaclar_diger,
                IlacAdi,
                Recete,
                KullanimSuresi,
                Dozu,
                Sikligi,
                AlinisYolu,
                Suresi,
                KullandigiAraclar,
                araclar_diger,
                Gozluk,
                KontaktLens,
                IsitmeCihazi,
                Sag,
                Sol,
                DisProtezi,
                TekerlekliSandalye,
                Baston,
                Yurutec,
                KoltukDegnegi,
                protez_diger,
                Aliskanliklar,
                aliskanlik_diger,
                Sigara,
                SMiktar,
                SKullanimSureci,
                Alkol,
                AMiktar,
                AKullanimSureci,
                Cay,
                CMiktar,
                CKullanimSureci,
                Kahve,
                KMiktar,
                KKullanimSureci,
                DDiger,
                DMiktar,
                DKullanimSureci,
                AileviSaglik,
                ailevi_diger,
                YakinlikDerecesi,
                Tanisi,
                GeldigiYer,
                yer_diger,
                GelisSekli,
                gelis_diger,
                Sikayetler,
                TibbiTani
              ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
              
    $stmt->execute([
        $_POST["ad_soyad"],
        $_POST["dogum_yeri"],
        $_POST["yas"],
        $_POST["cinsiyet"],
        $_POST["medeni_durum"],
        $_POST["meslek"],
        $_POST["egitim_durumu"],
        $_POST["protocol_file_no"],
        $_POST["yatis_tarihi"],
        $_POST["bolum"],
        $_POST["tibbi_tani"],
        $_POST["doktor_ad_soyad"],
        $_POST["cocuk_sayisi"],
        $_POST["sosyal_guvencesi"],
        $_POST["sosyal_guvence_diger"],
        $_POST["dil"],
        $_POST["TercumanGereksinimi"],
        $_POST["t_diger"],
        $_POST["TransfuzyonYapilma"],
        $_POST["yatisdiger"],
        $_POST["TransfuzyonReaksiyonu"],
        $_POST["reaksiyon_diger"],
        $_POST["BilgiKisisi"],
        $_POST["kisi_diger"],
        $_POST["kolbandi"],
        $_POST["kolbandiaciklama"],
        $_POST["adsoyadyakin"],
        $_POST["yakinlikderece"],
        $_POST["telefonyakin"],
        $_POST["adresyakin"],
        $_POST["YatisDurumu"],
        $_POST["yatis_durumu_diger"],
        $_POST["yatis_yili"],
        $_POST["yatis_suresi"],
        $_POST["yatis_nedeni"],
        $_POST["GetirdigiHastaliklar"],
        $_POST["hastalik_diger"],
        $_POST["GetirdigiAmeliyatlar"],
        $_POST["ameliyat_diger"],
        $_POST["GetirdigiKazalar"],
        $_POST["kaza_diger"],
        $_POST["BulasiciHastalik"],
        $_POST["bulasici_diger"],
        $_POST["AlerjikReaksiyon"],
        $_POST["alerji_diger"],
        $_POST["Allerjen"],
        $_POST["Belirtiler"],
        $_POST["Tedavi"],
        $_POST["KullanilanIlaclar"],
        $_POST["ilaclar_diger"],
        $_POST["IlacAdi"],
        $_POST["Recete"],
        $_POST["KullanimSuresi"],
        $_POST["Dozu"],
        $_POST["Sikligi"],
        $_POST["AlinisYolu"],
        $_POST["Suresi"],
        $_POST["KullandigiAraclar"],
        $_POST["araclar_diger"],
        $_POST["Gozluk"],
        $_POST["KontaktLens"],
        $_POST["IsitmeCihazi"],
        $_POST["Sag"],
        $_POST["Sol"],
        $_POST["DisProtezi"],
        $_POST["TekerlekliSandalye"],
        $_POST["Baston"],
        $_POST["Yurutec"],
        $_POST["KoltukDegnegi"],
        $_POST["protez_diger"],
        $_POST["Aliskanliklar"],
        $_POST["aliskanlik_diger"],
        $_POST["Sigara"],
        $_POST["SMiktar"],
        $_POST["SKullanimSureci"],
        $_POST["Alkol"],
        $_POST["AMiktar"],
        $_POST["AKullanimSureci"],
        $_POST["Cay"],
        $_POST["CMiktar"],
        $_POST["CKullanimSureci"],
        $_POST["Kahve"],
        $_POST["KMiktar"],
        $_POST["KKullanimSureci"],
        $_POST["DDiger"],
        $_POST["DMiktar"],
        $_POST["DKullanimSureci"],
        $_POST["AileviSaglik"],
        $_POST["ailevi_diger"],
        $_POST["YakinlikDerecesi"],
        $_POST["Tanisi"],
        $_POST["GeldigiYer"],
        $_POST["yer_diger"],
        $_POST["GelisSekli"],
        $_POST["gelis_diger"],
        $_POST["Sikayetler"],
        $_POST["TibbiTani"]
              ]);
            echo "succesfully inserted";
        }
    } else{

        echo "error";
    }
?>
