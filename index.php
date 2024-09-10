<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hibe ve teşvik Sorgulama</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <img src="logo.png" alt="Logo" class="logo">
        <h1>Hibe ve teşvik Sorgulama</h1>

        <!-- Form Başlangıcı -->
        <form action="result.php" method="post">
            <div class="form-group">
                <label for="business_active">İşletme aktif durumda mı?</label>
                <select name="business_active" id="business_active" required>
                    <option value="" disabled selected>İşletme aktif mi?</option>
                    <option value="yes">Evet</option>
                    <option value="no">Hayır</option>
                </select>
            </div>

            <div class="form-group">
                <label for="owner_share">Başvuruya konu işletmede başvuru sahibi olacak olan girişimcinin payı %50 üzerinde mi?</label>
                <select name="owner_share" id="owner_share" required>
                    <option value="" disabled selected>Pay durumu seçiniz</option>
                    <option value="yes">Evet</option>
                    <option value="no">Hayır</option>
                </select>
            </div>

            <div class="form-group">
                <label for="authorized_representative">Başvuru sahibi işletmeyi temsile yetkili mi?</label>
                <select name="authorized_representative" id="authorized_representative" required>
                    <option value="" disabled selected>Yetki durumu seçiniz</option>
                    <option value="yes">Evet</option>
                    <option value="no">Hayır</option>
                </select>
            </div>

            <div class="form-group">
                <label for="previous_shares">Son üç yıl içerisinde başvuru sahibinin başka bir şirkette %25 üzeri hissesi var mıydı?</label>
                <select name="previous_shares" id="previous_shares" required>
                    <option value="" disabled selected>Hisse durumu seçiniz</option>
                    <option value="yes">Evet</option>
                    <option value="no">Hayır</option>
                </select>
            </div>

            <div class="form-group">
                <label for="business_field">Faaliyet konusunu seçiniz:</label>
                <select name="business_field" id="business_field" required>
                    <option value="" disabled selected>Faaliyet konusunu seçiniz</option>
                    <option value="C">İmalat Sektörünün Tümü (Kısım C)</option>
                    <option value="61">Bölüm 61-Telekomünikasyon</option>
                    <option value="62">Bölüm 62-Bilgisayar programlama</option>
                    <option value="63">Bölüm 63-Bilgi hizmet faaliyetleri</option>
                    <option value="72">Bölüm 72-Bilimsel araştırma ve geliştirme faaliyetleri</option>
                    <option value="G">Motorlu Taşıt ve Motosikletlerin Onarımı (Kısım G)</option>
                    <option value="J">Bilgi ve iletişim (Kısım J)</option>
                    <option value="M">Mesleki, bilimsel ve teknik faaliyetler (Kısım M)</option>
                    <option value="S">Diğer hizmet faaliyetleri (Kısım S)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="business_age">İşletme kuruluşu üzerinden kaç yıl geçti?</label>
                <select name="business_age" id="business_age" required>
                    <option value="" disabled selected>İşletme yaşı seçiniz</option>
                    <option value="less_than_one">Bir yıldan az</option>
                    <option value="1">1 yıl</option>
                    <option value="2">2 yıl</option>
                    <option value="3">3 yıl</option>
                    <option value="4">4 yıl</option>
                    <option value="5_or_more">5 yıl ve üzeri</option>
                </select>
            </div>

            <div class="form-group">
                <label for="licenses">İşletme faaliyet gösterdiği sektörde gerekli tüm lisanslara sahip mi?</label>
                <select name="licenses" id="licenses" required>
                    <option value="" disabled selected>Lisans durumu seçiniz</option>
                    <option value="yes">Evet</option>
                    <option value="no">Hayır</option>
                </select>
            </div>

            <div class="form-group">
                <label for="capital_owner">İşletmenin sermaye sahipliğinin %75 veya daha fazlası özel sektöre ait mi?</label>
                <select name="capital_owner" id="capital_owner" required>
                    <option value="" disabled selected>Sermaye sahipliği seçiniz</option>
                    <option value="yes">Evet</option>
                    <option value="no">Hayır</option>
                </select>
            </div>

            <div class="form-group">
                <label for="min_credit_score">Proje teklif çağrısında ilan edilen asgari kredi skoru sağlanıyor mu?</label>
                <select name="min_credit_score" id="min_credit_score" required>
                    <option value="" disabled selected>Kredi skoru seçiniz</option>
                    <option value="yes">Evet</option>
                    <option value="no">Hayır</option>
                </select>
            </div>

            <div class="form-group">
                <label for="financial_balance">İşletme proje bütçesinin üzerinde mali bilanço veya net satışa sahip mi?</label>
                <select name="financial_balance" id="financial_balance" required>
                    <option value="" disabled selected>Mali bilanço durumu seçiniz</option>
                    <option value="yes">Evet</option>
                    <option value="no">Hayır</option>
                </select>
            </div>

            <div class="form-group">
                <label for="env_social_risk">İşletme Çevresel ve Sosyal Yönetim Sistemi'nde (ÇSYS) belirlenen izleme kriterlerine göre “düşük” veya “orta” seviyede mi?</label>
                <select name="env_social_risk" id="env_social_risk" required>
                    <option value="" disabled selected>Risk seviyesi seçiniz</option>
                    <option value="low_or_medium">Düşük veya orta</option>
                    <option value="high">Yüksek</option>
                </select>
            </div>

            <div class="form-group">
                <label for="energy_consumption">Alt bileşen 1.1 için yıllık enerji tüketiminin en az 20 Ton Eşdeğeri Petrol (TEP) veya eşdeğer kilowatt saat (kWh) mi?</label>
                <select name="energy_consumption" id="energy_consumption" required>
                    <option value="" disabled selected>Enerji tüketimi seçiniz</option>
                    <option value="yes">Evet</option>
                    <option value="no">Hayır</option>
                </select>
            </div>

            <div class="form-group">
                <label for="digital_transformation">İşletmeniz TÜBİTAK Türkiye Sanayi Sevk ve İdare Enstitüsü (TÜSSİDE) tarafından belgelendirilen dijital dönüşüm danışmanlarından dijital dönüşüm danışmanlığı hizmeti almış ve onaylı Dijital Dönüşüm Değerlendirme Analizi ve Yol Haritası Raporu bulunan bir işletme mi?</label>
                <select name="digital_transformation" id="digital_transformation" required>
                    <option value="" disabled selected>Dijital dönüşüm durumu seçiniz</option>
                    <option value="yes">Evet</option>
                    <option value="no">Hayır</option>
                </select>
            </div>

            <div class="form-group">
                <label for="financial_status">Son 3 mali yıl “Faaliyet Karı” veya son mali yıl “Öz Kaynaklar Toplamı” pozitif mi?</label>
                <select name="financial_status" id="financial_status" required>
                    <option value="" disabled selected>Finansal durum seçiniz</option>
                    <option value="yes">Evet</option>
                    <option value="no">Hayır</option>
                </select>
            </div>

          <!-- Yeni Alanlar Başlangıcı -->
          <div class="form-group">
              <label for="phone">Telefon Numarası</label>
              <input type="text" name="phone" id="phone" required>
          </div>

          <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" name="email" id="email" required>
          </div>

          <div class="form-group">
              <label for="company_name">Şirket İsmi</label>
              <input type="text" name="company_name" id="company_name" required>
          </div>

          <div class="form-group">
              <label for="field_of_activity">Faaliyet Alanı</label>
              <input type="text" name="field_of_activity" id="field_of_activity" required>
          </div>

          <div class="form-group">
              <label for="city">Şehir</label>
              <input type="text" name="city" id="city" required>
          </div>

          <div class="form-group">
              <label for="district">İlçe</label>
              <input type="text" name="district" id="district" required>
          </div>

          <div class="form-group">
              <label for="kvkk_consent">
                  <input type="checkbox" name="kvkk_consent" id="kvkk_consent" required>
                  AkademiSa Danışmanlık Şirketi’nin kişisel verilerin işlenmesine ilişkin aydınlatma metnini okudum ve onaylıyorum.
              </label>
          </div>
          <!-- Yeni Alanlar Sonu -->

          
            <button 
              type="submit">Sonuçları Göster</button>
        </form>
        <!-- Form Sonu -->
    </div>
</body>
</html>
