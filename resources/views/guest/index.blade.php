<?php

/**
variable lists daftar tamu: $guests
bisa dilooping dengan foreach
**/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>List Tamu</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

  <script src="{{ asset('js/app.js') }}"></script>

  <div class="card mt-3">
    <div class="card-header"></div>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-12">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Hubungan</th>
                <th>Keperluan</th>
                <th>Tanggal Datang</th>
                <th>Tanggal Pulang</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($guests as $guest)
                <tr>
                  <td>{{ $guest->guest_nik }}</td>
                  <td>{{ $guest->guest_full_name }}</td>
                  <td>{{ $guest->guest_gender == 1 ? 'Laki-laki' : 'Perempuan' }}</td>
                  <td>{{ $guest->guest_relation }}</td>
                  <td>{{ $guest->guest_purpose }}</td>
                  <td>{{ $guest->guest_come_at }}</td>
                  <td>{{ $guest->guest_back_at }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
