<?php

/**
action: route('guest.store')

parameter form:
[
        "user_id",
        "guest_full_name",
        "guest_nik",
        "guest_gender",
        "guest_age",
        "guest_come_at",
        "guest_back_at",
        "guest_relation",
        "guest_purpose",
    ]
**/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Buku Tamu</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

  <script src="{{ asset('js/app.js') }}"></script>

  <div class="card m-3">
    <div class="card-header text-center">
      <h4>Buku Tamu</h4>
    </div>
    <div class="card-body">
      <form action="{{ route('guest.store') }}" method="post">
        @csrf
        <div class="form-group form-floating mb-3">
          <input type="text" class="form-control" id="guest_full_name" name="guest_full_name"
            placeholder="Nama Lengkap" required>
          <label for="guest_full_name">Nama Lengkap</label>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="number" class="form-control" id="guest_nik" name="guest_nik" placeholder="NIK" required>
          <label for="guest_nik">NIK</label>
        </div>
        <div class="form-group mb-3">
          <label for="">Jenis Kelamin</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="guest_gender" id="laki" value="1" required>
            <label class="form-check-label" for="laki">
              Laki-laki
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="guest_gender" id="perempuan" value="2" required>
            <label class="form-check-label" for="perempuan">
              Perempuan
            </label>
          </div>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="number" class="form-control" id="guest_age" name="guest_age" placeholder="Umur" required>
          <label for="guest_age">Umur</label>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="date" class="form-control" id="guest_come_at" name="guest_come_at" placeholder="Tanggal Datang"
            required>
          <label for="guest_come_at">Tanggal Datang</label>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="date" class="form-control" id="guest_back_at" name="guest_back_at" placeholder="Tanggal Pulang"
            required>
          <label for="guest_back_at">Tanggal Pulang</label>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="text" class="form-control" id="guest_relation" name="guest_relation" placeholder="Hubungan"
            required>
          <label for="guest_relation">Hubungan</label>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="text" class="form-control" id="guest_purpose" name="guest_purpose"
            placeholder="Tujuan Kunjungan" required>
          <label for="guest_purpose">Tujuan Kunjungan</label>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary w-100">Simpan</button>
        </div>
      </form>
    </div>
  </div>

</body>

</html>
