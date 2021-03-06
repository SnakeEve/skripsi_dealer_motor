=======================================================================================
README
=======================================================================================
TOOLS
=======================================================================================
Balsamiq https://gist.github.com/williamgh2019/7b2cd28d22ce7e1d06ab8564961794f4
yED editor https://www.yworks.com/products/yed/download
Git https://git-scm.com/downloads
Git clone https://github.com/SnakeEve/skripsi_dealer_motor.git
Mockaroo https://www.mockaroo.com/

=======================================================================================
BACKLOG
=======================================================================================
staff password...

satu menu UI untuk beli kendaraan / sparepart (client)

sistem pembelian menggunakan FIFO

menu pembelian digabung untuk pembelian motor dan/atau sparepart

booking service harus dicatat km berapa

kalau mau ditambahkan diskon, buat sistem promo aja, di satu table baru

menu retur, barang yang diretur akan disimpan ke satu table terpisah, stock tidak akan dikembalikan ke stock inventory

=======================================================================================
FLOW OVERALL APLIKASI
=======================================================================================

Halaman Client dan Staff harus diisi, karena ini adalah master untuk login client/admin

Halaman Sparepart terpisah menjadi 3 bagian, Master Sparepart itu sendiri, Sparepart Brand dan Sparepart Type, Brand dan Type harus diisi karena itu data master, setelah itu diisi maka Sparepart baru dapat diisi.

Ketika Master Sparepart sudah diisi, kita dapat mengubah stock barang tersebut di Sparepart Stock

^Kendaraan memiliki logika yang persis sama

Halaman Transaction Report Sales, menampilkan order yang sudah selesai, antara memang sudah selesai atau dibatalkan. Detail masing-masing sales, detail pembeli, tanggal beserta sparepart/kendaraan yang dibeli dapat dilihat di menu action di masing-masing baris

Halaman Booking Sales, menampilkan service order yang belum selesai. Admin dapat melakukan approve/reject di detail transaksi, transaksi yang sudah diapprove/reject akan muncul di Report Transaction Service

Halaman Transaction Report Service, menampilkan service order yang sudah selesai, antara memang sudah selesai atau dibatalkan. Detail masing-masing sales, detail pembeli, detail kendaraan yang diservice, tanggal, beserta sparepart yang digunakan dapat dilihat di menu action di masing-masing baris


=======================================================================================
NOTES
=======================================================================================
Titip notes:
Di aplikasi ini, ada 3 major flow
1. Item transaction
2. Service transaction
3. Return transaction

Item transaction terdiri dari
Client id, client name, item list
Status:
- incoming order
- payment pending
- finished
- cancelled by client
- cancelled by store

Service transaction terdiri dari
Client id, client name, location, date, reschedule date, vehicle id, vehicle note, sparepart list, price
Status flow A:
- incoming order
- on queue
- on hold / reschedule
- on progress
- finished
- cancelled by client
- cancelled by store

Status flow B:
- incoming order
- on queue
- on hold / reschedule
- on the way to client
- on progress
- finished
- cancelled by client
- cancelled by store

Return transaction terdiri dari
Client id, client name, item list
Status:
- on request
- on hold / no stock
- finished
- cancelled by client
- cancelled by store

* Semua order yg dibatalkan harus ada masukin comment

=======================================================================================
IGNORE THIS PART
=======================================================================================


FLOW PEMBELIAN kendaraan / sparepart
1. client pilih barang (barang yang mau dibeli selalu ambil harga dari barang dengan ID yg sama dari master, ambil harga yg paling baru + diskon, kalau modul promo jadi dibuat)
2. checkout
3. bayar (admin cek jika pembayaran sudah lunas, terus ganti status)

FLOW SERVICE online
1a.client pilih kendaraan yg dia punya (dari master)
1b. client isi kendaraan free text jika showroom gak ada masternya
2a. isi koordinat lokasi (jika service datang ke rumah)
3. submit
(proses pembayaran hanya dicatat lunas atau tidaknya transaksi, atau jika cancel transaksi)

1. admin cek daftar service yg masuk
2. konfirmasi schedule
3. kirim email ke client kalau schedule sudah dikonfirmasi, jika tidak punya email, manual by phone
4. diasumsikan client datang dan bawa motor, admin mengisi list sparepart yang harus diganti (update data transaksi & ganti status)
5. menunggu pembayaran, jika sudah lunas (ganti status)

FLOW SERVICE manual
1. admin catat kendaraan (sesuai master) *apakah perlu disediakan freetext sebagai comment jika data tidak ada?
2. diasumsikan client datang dan bawa motor, admin mengisi list sparepart yang harus diganti (update data transaksi & ganti status) 
3. menunggu pembayaran, jika sudah lunas (ganti status)