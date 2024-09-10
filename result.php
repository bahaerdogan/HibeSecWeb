<?php
// Form verilerini al
$business_active = $_POST['business_active'];
$owner_share = $_POST['owner_share'];
$authorized_representative = $_POST['authorized_representative'];
$previous_shares = $_POST['previous_shares'];
$business_field = $_POST['business_field'];
$business_age = $_POST['business_age'];
$licenses = $_POST['licenses'];
$capital_owner = $_POST['capital_owner'];
$min_credit_score = $_POST['min_credit_score'];
$financial_balance = $_POST['financial_balance'];
$env_social_risk = $_POST['env_social_risk'];
$energy_consumption = $_POST['energy_consumption'];
$digital_transformation = $_POST['digital_transformation'];
$financial_status = $_POST['financial_status'];

// Kullanıcı bilgilerini al
$phone = $_POST['phone'];
$email = $_POST['email'];
$company_name = $_POST['company_name'];
$field_of_activity = $_POST['field_of_activity'];
$city = $_POST['city'];
$district = $_POST['district'];
$kvkk_consent = isset($_POST['kvkk_consent']) ? $_POST['kvkk_consent'] : 'no';

// KVKK onayını kontrol et
if ($kvkk_consent !== 'on') {
    die("KVKK aydınlatma metnini onaylamadan formu gönderemezsiniz.");
}

// Destek programlarını belirleme
$support_programs = [];

// İş kurma desteği ve iş geliştirme desteği birlikte alınabilir
if ($business_active == 'yes' &&
    $owner_share == 'yes' &&
    $authorized_representative == 'yes' &&
    $previous_shares == 'no' &&
    ($business_field == 'C' || $business_field == '61' || $business_field == '62' || $business_field == '63' || $business_field == '72') &&
    $business_age == 'less_than_one') {
    $support_programs[] = "İş Kurma Desteği ve İş Geliştirme Desteği";
} 
// İş geliştirme desteği alınabilir ama iş kurma desteği alınamaz
else if ($business_active == 'yes' &&
         $owner_share == 'yes' &&
         $authorized_representative == 'yes' &&
         $previous_shares == 'no' &&
         ($business_field == 'C' || $business_field == '61' || $business_field == '62' || $business_field == '63' || $business_field == '72') &&
         ($business_age == '1' || $business_age == '2')) {
    $support_programs[] = "İş Geliştirme Desteği";
} 
// Yeşil sanayi desteği
else if ($business_active == 'yes' &&
         ($business_field == 'C' || $business_field == 'G' || $business_field == 'J' || $business_field == 'M' || $business_field == 'S') &&
         $licenses == 'yes' &&
         $capital_owner == 'yes' &&
         $min_credit_score == 'yes' &&
         $financial_balance == 'yes' &&
         $env_social_risk == 'low_or_medium' &&
         $energy_consumption == 'yes') {
    $support_programs[] = "Yeşil Sanayi Desteği";
} 
// KOBİ Dijital Dönüşüm Programı desteği
else if ($business_active == 'yes' &&
         $business_field == 'C' &&
         $digital_transformation == 'yes' &&
         $financial_status == 'yes') {
    $support_programs[] = "KOBİ Dijital Dönüşüm Programı Desteği";
}

// Sonuçları ekrana yazdırma
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonuçlar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Destek Programları Sonuçları</h1>
        <div id="results">
            <h2>Önerilen Destek Programları:</h2>
            <ul>
                <?php
                if (!empty($support_programs)) {
                    foreach ($support_programs as $program) {
                        echo "<li>" . htmlspecialchars($program) . "</li>";
                    }
                } else {
                    echo "<li>Maalesef mevcut bilgilerinizle uygun bir destek programı bulunmamaktadır.</li>";
                }
                
        // E-posta gönderimi
        $to = 'info@hibeturkiye.com';
        $subject = 'Yeni Destek Programı Başvurusu';
        $message = "Kullanıcı Bilgileri:\n";
        $message .= "Telefon Numarası: " . htmlspecialchars($phone) . "\n";
        $message .= "E-mail: " . htmlspecialchars($email) . "\n";
        $message .= "Şirket İsmi: " . htmlspecialchars($company_name) . "\n";
        $message .= "Faaliyet Alanı: " . htmlspecialchars($field_of_activity) . "\n";
        $message .= "Şehir: " . htmlspecialchars($city) . "\n";
        $message .= "İlçe: " . htmlspecialchars($district) . "\n\n";
        $message .= "Önerilen Destek Programları:\n";

        if (!empty($support_programs)) {
            foreach ($support_programs as $program) {
                $message .= "- " . htmlspecialchars($program) . "\n";
            }
        } else {
            $message .= "- Maalesef mevcut bilgilerinizle uygun bir destek programı bulunmamaktadır.\n";
        }

        // E-posta başlıkları
        $headers = "From: no-reply@hibeturkiye.com\r\n";
        $headers .= "Reply-To: no-reply@hibeturkiye.com\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // E-postayı gönder
        mail($to, $subject, $message, $headers);

        // Başarılı olduğuna dair kullanıcıya bilgi
        echo "Sistemimizi kullandığınız için teşekkkürler.";
        ?>
    
</body>
</html>
