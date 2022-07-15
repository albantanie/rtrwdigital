<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>List Pendaftar Bantuan Sosial</title>
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
                <th>Nama</th>
                <th>Pekerjaan</th>
                <th>Penghasilan</th>
                <th>Status Pernikahan</th>
                <th>Jumlah Anak</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($funds as $fund)
                <tr>
                  <td>{{ $users->find($fund->user_id)->first_name . ' ' . $users->find($fund->user_id)->last_name }}
                  </td>
                  <td>{{ $fund->job }}</td>
                  <td>{{ 'Rp' . number_format($fund->salary, 2, ',', '.') }}</td>
                  <td>
                    @if ($fund->married_status == 1)
                      Menikah
                    @elseif ($fund->married_status == 2)
                      Belum Menikah
                    @else
                      Bercerai
                    @endif
                  </td>
                  <td>{{ $fund->childs }}</td>
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
