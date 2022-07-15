<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

  <script src="{{ asset('js/app.js') }}"></script>

  <div class="card m-3">
    <div class="card-header text-center">
      <h4>Register</h4>
    </div>
    <div class="card-body">
      <form action="{{ route('user.register') }}" method="post">
        @csrf
        <div class="form-group form-floating mb-3">
          <input type="number" class="form-control" id="nik" name="nik" placeholder="NIK" required>
          <label for="nik">NIK</label>
        </div>
        <div class="row mb-3">
          <div class="form-group col form-floating">
            <input type="text" class="form-control" id="addr_rt" name="addr_rt" placeholder="RT" required>
            <label for="addr_rt">RT</label>
          </div>
          <div class="form-group col form-floating">
            <input type="text" class="form-control" id="addr_rw" name="addr_rw" placeholder="RW" required>
            <label for="addr_rw">RW</label>
          </div>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="text" class="form-control" id="addr_urban" name="addr_urban" placeholder="Kelurahan" required>
          <label for="addr_urban">Kelurahan</label>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="text" class="form-control" id="addr_distric" name="addr_distric" placeholder="Kecamatan"
            required>
          <label for="addr_distric">Kecamatan</label>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="text" class="form-control" id="addr_city" name="addr_city" placeholder="Kota" required>
          <label for="addr_city">Kota</label>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="text" class="form-control" id="addr_state" name="addr_state" placeholder="Provinsi" required>
          <label for="addr_state">Provinsi</label>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="text" class="form-control" id="
          addr_full" name="addr_full" placeholder="Alamat Lengkap" required>
          <label for=" addr_full">Alamat Lengkap</label>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="number" class="form-control" id="postal_code" name="postal_code" placeholder="Kode Pos"
            required>
          <label for="postal_code">Kode Pos</label>
        </div>
        <div class="row">
          <div class="form-group col form-floating mb-3">
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nama Depan"
              required>
            <label for="first_name">Nama Depan</label>
          </div>
          <div class="form-group col form-floating mb-3">
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Nama Belakang"
              required>
            <label for="last_name">Nama Belakang</label>
          </div>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="date" class="form-control" id="birth" name="birth" placeholder="Tanggal Lahir" required>
          <label for="birth">Tanggal Lahir</label>
        </div>
        <div class="form-group mb-3">
          <label for="">Jenis Kelamin</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender_id" id="laki" value="1" required>
            <label class="form-check-label" for="laki">
              Laki-laki
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender_id" id="perempuan" value="2" required>
            <label class="form-check-label" for="perempuan">
              Perempuan
            </label>
          </div>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          <label for="email">Email</label>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="number" class="form-control" id="phone" name="phone" placeholder="Nomor Telepon" required>
          <label for="phone">Nomor Telepon</label>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
      </form>
    </div>
  </div>
</body>

</html>
