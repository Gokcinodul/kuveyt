# Laravel 5.1 KuveytTurk Sanal Pos Entegrasyonu

Komut satırından bu kodu çalıştırınız:
```
composer require gokcinodul/kuveyt dev-master
```

```config/app.php``` dosyasına aşağıda bulunan satırları ekliyoruz.
```php
return [
    // ...

    'providers' => [
        // ...

        gokcinodul\Kuveyt\KuveytServiceProvider::class
    ],

    // ...

    'aliases' => [
        // ...

        'Kuveyt'    => gokcinodul\Kuveyt\Facades\Kuveyt::class
    ],
);
```
# Ayarlar

```code
php artisan vendor:publish
```
komutunu kullanarak ``` config/kuveyt.php``` dosyasını yayınlıyoruz.

### kuveyt.php

```php
return [
    "Type"                => "Sale",
    "APIVersion"          => "1.0.0",
    "CurrencyCode"        => "0949",
    "MerchantId"          => "Mağaza Kodu",
    "OkUrl"               => "Basarili sonuç alinirsa, yönledirelecek sayfa",
    "FailUrl"             => "Basarisiz sonuç alinirsa, yönledirelecek sayfa",
    "UserName"            => "Web Yönetim ekranlarindan olusturulan api rollü kullanici",
    "Password"            => "Web Yönetim ekranlarindan olusturulan api rollü kullanici sifresi",
    "TransactionSecurity" => "3" // 3d Secure = 3 , 3d'siz = 1
];

```

Kullanıma hazır!

#Kullanımı
```php
use Kuveyt;

public function index()
{
    $kuveyt = Kuveyt::setName('Gökçin ÖDÜL')
        ->setCardNumber(1234567891234567)
        ->setCardExpireDateMonth(12)
        ->setCardExpireDateYear(2021)
        ->setCardCvv2(855)
        ->setOrderId(1455)
        ->setAmount(100)
        ->setCustomerId(1923)
        ->pay();
}
```
