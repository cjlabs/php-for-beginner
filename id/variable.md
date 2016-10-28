# Variable

---

variable bisa dikatakan sebagai tempat untuk menyimpan suatu data atau value yang dapat berubah-bubah pada saat program di jalankan,  variable ini juga di klasifikasikan berdasarkan jenisnya

## Ketentuan penulisan variable di php

php punya aturan dan ketentuan-ketentuan terkait dengan pendefinisian variable  diantaranya adalah :

* nama variable harus di awali dengan tanda dolar\(**$**\) di ikuti dengan nama variablenya, contoh **$nama = ''; **
* untuk memberikan nilai variable adalah nama variable di ikuti dengan **=** dan valuenya, contoh $nama = 'Putera Kahfi';
* tidak boleh ada spasi unuk memisahkan nama variable, gunakan underscore \('\_'\) atau camelCase 
* tidak boleh menggunakan angka setelah tanda **$, **variable boleh di awali dengan huruf, underscore
* kombinasi variable hanya terdiri dari huruf, angka dan underscore, selain dari kombinasi tersebut tidak di perbolehkan
* tidak boleh menggunakan reserved word dari php
* variable bersifat **case-sensitive, **artinya besar kecil huruf di anggap berbeda oleh php, $nama dan $Nama dianggap dua variable yang berbeda oleh php 

**berikut adalah contoh penulisan variable yang benar :**

* $nama, $NAMA, $Nama, $N4m4  \(menggunakan huruf semua, baik huruf kecil semua, huruf besar semua maupun kombinasi keduanya, atau kombinasi dari huruf dan angka, selama tidak menggunakan angka di awal nama variable\)

* $\_nama, $\_NAMA, $\_Nama, $Nam4  \(diawali dengan underscore dan di ikuti huruf, angka, maupun kombinasi dari huruf angka dan underscore\)


**Berikut adalah contoh penulisan variable yang tidak di perbolehkan :**

* $4lamat  \( tidak boleh di awali dengan angka\)
* $print    \( tidak boleh menggunakan reserved word di php, walaupun masih bisa di eksekusi \)
* $alamat-lengkap \( tidak boleh menggunakan karakter selain underscore\)

### **Bagaimana mendefinisikan variable di php **

Tidak ada aturan yang baku tentang bagaimana menuliskan variable di php, selama tidak melanggar aturan dari php maka variable bisa di gunakan, hanya saja beberapa tips berikut bisa membantu kita untuk mendefinisikan variable dengan baik

* **Gunakan nama variable yang mudah di fahami**
  menggunakan nama variable yang mudah di fahami selain mempermudah menjelaskan fungsi variable tersebut, juga akan membantu kita untuk mengerti kegunaan variable tersebut 
  misalnya $namaLengkap lebih mudah di fahami dari pada menggunakan $xyz $x dan yang semisalnya

* **Konsisten dalam penulisan**
  konsisten dalam penulisan juga cukup membantu supaya kode kita lebih standard dan seragam, misalnya kita menggunakan underscore atau camel case untuk memisahkan variable yang terdiri dari dua kata, contoh : $nama\_lengkap, atau $namaLengkap, silahkan gunakan yang mana saja asal konsisten

* 
* 

## Tipe-tipe variable di php

### String

### Integer

### Doubles

### Boolean

### Array

### Object

### NULL

## Scope Variable

### Variable Global

### Variable Local

### **Variable Static**

### **Function Parameter**

