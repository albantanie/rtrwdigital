<?php

/**
 * action form = route('fund.store')
 *
list input:

[
        "salary",
        "married_status",
        "childs",
        "job",
    ]
**/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bantuan Sosial</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

  <script src="{{ asset('js/app.js') }}"></script>

  <div class="card m-3">
    <div class="card-header text-center">
      <h4>Daftar Bantuan Sosial</h4>
    </div>
    <div class="card-body">
      <form action="{{ route('fund.store') }}" method="post">
        @csrf
        <div class="form-group form-floating mb-3">
          <input type="text" class="form-control" id="job" name="job" placeholder="Pekerjaan" required>
          <label for="job">Pekerjaan</label>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="number" class="form-control" id="salary" name="salary" placeholder="Penghasilan" required>
          <label for="salary">Penghasilan</label>
        </div>
        <div class="form-group mb-3">
          <label for="">Status Pernikahan</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="married_status" id="belum_menikah" value="1" required>
            <label class="form-check-label" for="belum_menikah">
              Belum Menikah
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="married_status" id="menikah" value="2" required>
            <label class="form-check-label" for="menikah">
              Menikah
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="married_status" id="bercerai" value="3" required>
            <label class="form-check-label" for="bercerai">
              Bercerai
            </label>
          </div>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="number" class="form-control" id="childs" name="childs" placeholder="Jumlah anak" required>
          <label for="childs">Jumlah Anak</label>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary w-100">Simpan</button>
        </div>
      </form>
    </div>
  </div>

</body>

</html>
