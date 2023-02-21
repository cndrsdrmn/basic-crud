# Simple CRUD

## Installation

1) Clone this repository:
    
   ```shell
    git clone https://github.com/cndrsdrmn/basic-crud
    ```

2) After cloned this repository, you need go to project root directory and run `composer install`:
    
   ```shell
    cd basic-crud && composer install
    ```

3) Then copy the `.env` file:
   
    ```shell
    cp .env.example .env
    ```

4) Create database and tables:
   
    ```sql
    create database crud;
    ```
   
   > **Note**: the database should be same with variable environment on `.env` file you can find it on `DB_DATABASE` 

    ```sql
    create table users
    (
      id                            bigint unsigned auto_increment primary key,
      loan_id                       text         null,
      customer_fullname             varchar(255) not null,
      shortname                     varchar(255) not null,
      nama_sebelum                  text         null,
      kode_identitas                varchar(255) not null,
      no_identitas                  varchar(255) not null,
      npwp                          text         null,
      tanggal_akhir_id              text         null,
      tempat_lahir                  varchar(255) not null,
      tanggal_lahir                 varchar(255) not null,
      nama_ibu_kandung              varchar(255) not null,
      status_pendidikan             text         null,
      agama                         text         null,
      jenis_kelamin                 text         null,
      status_perkawinan             text         null,
      alamat1                       varchar(255) not null,
      alamat2                       varchar(255) not null,
      alamat3                       text         null,
      alamat4                       text         null,
      alamat5                       text         null,
      postal_code                   text         null,
      pekerjaan_nasabah             varchar(255) not null,
      alamat_tempat_bekerja1        varchar(255) not null,
      alamat_tempat_bekerja2        varchar(255) not null,
      alamat_tempat_bekerja3        text         null,
      alamat_tempat_bekerja4        text         null,
      alamat_tempat_bekerja5        text         null,
      aktivitas_trx_normal          text         null,
      tujuan_penggunaan_dana        text         null,
      jumlah_penghasilan            varchar(255) not null,
      keg_usaha_kerja               text         null,
      loan_amount                   varchar(255) not null,
      jangka_waktu_kredit           text         null,
      no_hp                         varchar(255) not null,
      email                         varchar(255) not null,
      rate                          text         null,
      lokasi_usaha                  text         null,
      lokasi_proyek                 text         null,
      kontak_person                 text         null,
      golongan_darah                varchar(255) not null,
      spouse_name                   varchar(255) not null,
      nik_pasangan                  varchar(255) not null,
      tgl_lahir_pasangan            varchar(255) not null,
      bekerja_sebagai               varchar(255) not null,
      no_rekening_pinjaman          varchar(255) not null,
      inspoubrdt                    text         null,
      sifat_kredit                  text         null,
      suku_bunga_bjb                text         null,
      photo_id                      varchar(255) not null,
      photo_usaha_mitra             varchar(255) not null,
      photo_mitra                   text         null,
      loan_type                     text         null,
      kode_ao                       text         null,
      credit_grade                  text         null,
      biaya_hidup                   text         null,
      kode_cabang                   text         null,
      cif                           text         null,
      penghasilan_pertahun          text         null,
      kekayaan_bersih               text         null,
      first_repayment_date          text         null,
      omset_tahunan                 text         null,
      maturity_date                 text         null,
      loan_start_date               text         null,
      contract_date                 text         null,
      tanggal_angsuran              text         null,
      jenis_suku_bunga              text         null,
      persentase_provisi            text         null,
      kode_pekerjaan                text         null,
      original_first_interes_date    text         null,
      no_SKK                        text         null,
      pekerjaan_ritel               text         null,
      no_pk                         text         null,
      instansi                      varchar(255) not null,
      created_at                    timestamp    null,
      updated_at                    timestamp    null
    )
    collate = utf8mb4_unicode_ci;
    ```
   > **Note**: for simplify u just run `php artisan migrate`

5) Then run the serve command:

    ```shell
    php artisan serve
    ```

6) Okay the application should be running on `http://localhost:8000` open it and start explore.
