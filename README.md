**NAMA    : MOCH. DZAKY MUSYADDAD**                                             
**NIM     : 362358302011**                                                      
**KELAS   : 2A TRPL**
                                                                                    
**1. PRAKTIKUM**
- Melakukan Register Pada User (POST)
  
  ![image](https://github.com/user-attachments/assets/36040c83-e5d0-4351-81f7-9a1350af6801)
  - Keterangan: Melakukan register dengan menggunakan endpoint post dan akan muncul respon berupa token yang nantinya dapat digunakan untuk melakukan beberapa permintaan/request lainnya.

- Melakukan Login Pada User (POST)
  
  ![image](https://github.com/user-attachments/assets/0d766237-b2af-41e7-a001-a1a6266b9890)
  - Keterangan: Melakukan login dengan menggunakan endpoint post dan secara otomatis akan muncul respon berupa token yang nantinya digunakan untuk melakukan beberapa permintaan/request sesuai dengan yang dibutuhkan.

- Menyimpan Data Mahasiswa (POST)

  <img width="670" alt="image" src="https://github.com/user-attachments/assets/5192c9f9-4614-4b50-9178-61ffbb42febc">

  - Keterangan: Melakukan input data mahasiswa menggunakan endpoint post dan memasukkan body beserta dengan token yang sudah didapatkan tadi. Saat mengirimkan perintah akan secara otomatis menambahkan data mahasiswa pada tabel mahasiswas.

- Mengambil Semua Data Mahasiswa (GET)
  
  ![image](https://github.com/user-attachments/assets/b7e92111-ca31-4368-b744-ec7552ba5539)
  - Keterangan: Melakukan cek data mahasiswa dengan menggunakan get dan memasukkan token yang sudah didapatkan tadi. Secara otomatis akan menampilkan semua data mahasiswa yang terdapat pada tabel mahasiswas.

- Menghapus Data Mahasiswa (Hanya Admin - DELETE)
  
  ![image](https://github.com/user-attachments/assets/3e447b9f-cc79-4a4f-b4b9-81acb88b37d4)
  - Keterangan: Melakukan hapus data mahasiswa sesuai dengan id mahasiswa dengan menggunakan endpoint delete dan mengisi token yang sudah didapatkan tadi. Sehingga saat mengirimkan permintaan/request akan secara otomatis menghapus data tersebut pada tabel mahasiswas.

**2. Tugas Pratikum**
- Menambahkan Role Pada Tabel Mahasiswas
  - Membuat migrate baru untuk menambahkan role pada tabel user
    
    ![image](https://github.com/user-attachments/assets/a06a6851-073a-40cd-bf4b-c812bd04c404)
    ![image](https://github.com/user-attachments/assets/ea99e257-0aa6-4e1f-b8ea-e53e48729220)
    ![image](https://github.com/user-attachments/assets/394dfc32-fb45-43a1-a381-c9cd1f9266bd)
      - Keterangan: Membuat kolom role pada tabel mahasiswas yang digunakan sebagai pembeda hak akses antara user dan admin. Secara otomatis data users yang ada akan secara default menjadi role user.

- Mengisi Data Admin Baru Dengan Role Admin
  - Mengisi data admin pada seeder
    
    ![image](https://github.com/user-attachments/assets/54daa933-adfc-44d5-8893-e8386cf72913)
      - Keterangan: Mengisi data admin baru dengan role admin pada seeder agar lebih efisien dalam pengaksesan admin.
  - Melakukan migrate data
    
    ![image](https://github.com/user-attachments/assets/f90891c0-a599-4e92-8ae9-8a1e2f9513a5)
      - Keterangan: Melakukan pengiriman data admin baru kepada tabel users dengan melakukan perintah db:seed.

  - Data Pada Tabel Users
    
      ![image](https://github.com/user-attachments/assets/368c4ee8-98fa-423c-a7c1-6c9d6470f2a0)
    

  - Menambahkan Route Baru
    
    <img width="829" alt="image" src="https://github.com/user-attachments/assets/41e74f4d-a9bc-48a6-9a46-14cd4197428c">
    
    - Keterangan: Membuat route baru pada file api.php untuk akses pada admin saat akan melakukan beberapa request pada data mahasiswa.


- Melakukan Perintah CRUD (Login sebagai role Admin)
  - Login Admin (POST)
    
    <img width="673" alt="image" src="https://github.com/user-attachments/assets/c52e12e9-376f-4f3a-bd6e-7934ba76617c">
    
    - Keterangan: Melakukan login admin sesuai dengan data yang memiliki role admin untuk mendapatkan token yang nantinya digunakan untuk melakukan beberapa endpoint atau request sesuai dengan kebutuhan.


  - Membuat data mahasiswa (POST)
    
    <img width="670" alt="image" src="https://github.com/user-attachments/assets/435ccbd9-ebf6-41f9-8131-25d5f03e3ba1">
    
    - Keterangan: Melakukan penambahan data mahasiswa dengan menggunakan token yang sudah didapatkan tadi serta menambahkan data pada body untuk memasukkan data yang ingin diinputkan. 


  - Melihat data mahasiswa (GET)
 
    <img width="666" alt="image" src="https://github.com/user-attachments/assets/85e7630b-70e1-4212-a484-0b072e3f3cd5">
    
    - Keterangan: Melihat semua data mahasiswa yang ada dengan menggunakan token yang sudah didaptakan tadi.


  - Mengubah data mahasiswa (PUT)
    
    <img width="670" alt="image" src="https://github.com/user-attachments/assets/fd7918d8-50e5-4179-a0f0-b51028be96a3">
    
    - Keterangan: Mengubah data mahasiswa sesuai dengan id data mahasiswa menggunakan token yang sudah didapatkan tadi serta menambahkan data pada body untuk melakukan perubahan pada data.


  - Menghapus data mahasiswa (DELETE)
    
    <img width="665" alt="image" src="https://github.com/user-attachments/assets/1672422f-7e54-4fbd-a49c-39b7d5d41b1e">
    
    - Keterangan: Menghapus data mahasiswa sesuai dengan id data mahasiswa menggunakan token yang sudah didapatkan.
    






