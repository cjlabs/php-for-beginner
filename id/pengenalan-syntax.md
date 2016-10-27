# Pengenalan Syntax PHP

---

Di dalam pemrograman ada istilah \_syntax, \_syntax merupakan aturan penulisan di dalam program berdasarkan aturan-aturan yang sudah di tetapkan oleh bahasa pemrograman tersebut

### extensi file

extensi file php adalah **.php**, nama file sebaiknya mewakili dari fungsi dan kegunaan file tersebut, misalnya **email.php, **berisi file php untuk mengirim email, hal ini akan memudahkan dalam manajemen file nantinya ketika file php sudah banyak

### **Tag php**

Untuk memulai membuat file php menggunakan  **&lt;?php,** dan di tutup dengan **?&gt; \(**pilihan ini sifatnya optional, tapi untuk php terbaru tidak usah menggunakan** ?&gt; **cukup dengan **&lt;?php \)**

contoh kode php untuk menampilkan " Hello World"  :

```php

<?php

echo  "Hello World";

```

### Komentar

Komentar merupakan bagian yang tidak akan di eksekusi oleh program, komentar biasanya di gunakan untuk menjelaskan flow, variable, method sehingga lebih mudah di fahami

**Single-line Komentar**

Single-line komentar adalah komentar\/keterangan yang hanya satu baris, biasanya di gunakan untuk memberikan  secara singkat tentang code tersebut, ada dua cara yang bisa anda gunakan untuk menuliskan single-line komentar, pertama menggunakan '**\#'**  atau menggunakan '**\/\/',** berikut adalah contohnya :

```php

<?php

# single-line komentar dengan '#'
# variable untuk menyimpan nama, default adalah kosong
$name = '';

// single-line komentar dengan  '//'
// variable untuk menyimpan alamat, default adalah kosong
$address ='';

```

**Multi-line Komentar**

Multi-line Komentar adalah komentar yang bisa lebih dari satu baris, umummya untuk menjelaskan lebih detail tentang code tersebut, dan biasanya juga sebagai header sebuah file yang menjelaskan tentang code tersebut, siapa penulisnya lokasi namespace, dll, berikut adalah contohnya, cara membuat multi-line komentar adalah menggunakan **\/\*** sebagai pembukanya dan **\*\/** sebagai penutupnya, berikut adalah contohnya :

```php
<?php

/* 
desc   : email class to handle email 
author : putera kahfi <puterakahfi@email.com>
*/

class Email {

/**
@desc method for send email
@access public
@method send
@params $from, $to, $body
**/
public function send($from, $to, $body)
{
}

}
```

**Semicolon**

semicolon di gunakan untuk mengakhiri\(terminated\) sebuah statement, php menggunakan ; untuk mengakhiri statement code

contoh :

```php
<?php
# file : semicolon.php

$bilangan = 1;
print $bilangan;
```

dari contoh di atas ada dua statement, yang pertama adalah variable bilangan untuk menyimpan bilangan dan di beri nilai 1, kemudian statement kedua adalah menampilkan bilangan \( hasilnya adalah 1\)

**Bracket untuk block statement yang lebih dari satu**

untuk mengelompokkan statement ke dalam satu group bisa menggunakan bracket { }, sehingga kode yang berada di dalam bracket masuk ke dalam group tersebut, biasanya ini di kombinasikan dengan kondisi, looping, contohnya adalah sebagai berikut :

```php
<?php
# variabel bilangan
$bilangan = 10;
if($bilangan %2== 0){
    # block pertama
    echo  " bilangan yang di inputkan adalah $bilangan";
    echo  " $bilangan adalah bilangan genap"; 
}else{
    # block kedua
    echo " bilangan yang di inputkan adalah $bilangan";
    echo " $bilangan adalah bilangan ganjil";
}
```

pada contoh diatas ada statement untuk untuk  pengecekan apakah bilangan habis di bagi dua, jika iya, maka bilangan tersebut dalah bilangan genap dan block yang akan di eksekusi adalah block pertama, jika tidak maka block yang akan di eksekusi adalah block ke dua.

contoh di atas adalah contoh single block, kita akan sangat sering menemukan atau menggunakan multiple block, di dalam block ada block lagi, dan seterusnya, kita akan ambil contoh diatas dan kita kembangkan menjadi multi block, misalnya kita inputkan serangkaian bilangan, kemudian bilangan tersebut di loop, kemudian ceck  apakah bilangan tersebut ganjil atau genap, berikut adalah contohnya :




```php

<?php
# variabel bilangan
$bilangan = array(1,2,3,4,5,6,7,8,9,10);
foreach($bilangan as $val)
{
#block pertama
if($val %2== 0){
    # block kedua
    echo  " bilangan yang di inputkan adalah $val \n";    
    echo  " $val adalah bilangan genap \n"; 
}else{
    # block ketiga
    echo " bilangan yang di inputkan adalah $val \n";    
    echo " $val adalah bilangan ganjil \n";}
}
```

