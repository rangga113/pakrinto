# Aplikasi Pembantu Warga Desa

Aplikasi ini dirancang untuk mempermudah komunikasi antara **warga**, **pak RT**, dan **admin desa**.  
Fokus utama aplikasi adalah memudahkan proses pelaporan masalah, penyampaian informasi, dan pengelolaan data desa secara cepat dan transparan.

## Fitur Utama

### Untuk Warga  
- Mengirim laporan (infrastruktur, keamanan, kesehatan, dll)  
- Melihat status laporan  
- Menerima notifikasi dari RT/Admin  
- Melihat jadwal kegiatan desa  

### Untuk Pak RT  
- Melihat dan menindaklanjuti laporan  
- Mengubah status laporan (diproses, selesai)  
- Mengelola informasi kegiatan desa  
- Mengirim pengumuman ke warga  

### Untuk Admin  
- Mengelola data pengguna  
- Memvalidasi laporan dan tanggapan  
- Mengelola kegiatan desa  
- Melihat statistik laporan  

## Struktur Database (Ringkas)

| Tabel         | Deskripsi                  |
|--------------|---------------------------|
| Users        | Data warga, pak RT, admin |
| Laporan      | Laporan dari warga        |
| Tanggapan    | Respon dari RT/Admin      |
| Notifikasi   | Informasi untuk warga     |
| KegiatanDesa | Agenda atau acara desa    |

## Teknologi

- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** Node.js atau Laravel  
- **Database:** MySQL atau PostgreSQL



