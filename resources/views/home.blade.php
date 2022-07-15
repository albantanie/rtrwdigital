<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>RT/RW Digital</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
  <script src="{{ asset('js/app.js') }}"></script>

  <div class="card m-3">
    <div class="card-header text-center" style="background-color: #1D6DCF;color: white;">
      <div class="d-flex justify-content-between">
        <h4>Welcome to RT/RW Digital</h4>
        <a href="/logout" type="button" class="btn btn-dark">
          Logout
        </a>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <a href="{{ route('guest.store') }}" type="button"
          class="btn btn-outline-dark col-sm-5 pt-4 pb-4 mb-3 container">
          Lapor Tamu
        </a>
        <a href="{{ route('fund.store') }}" type="button"
          class="btn btn-outline-dark col-sm-5 pt-4 pb-4 mb-3 container">
          Daftar Bantuan Sosial
        </a>
        {{-- <a href="#" type="button" class="btn btn-outline-dark col-sm-3 pt-4 pb-4 mb-3 container">
          Berita Terkini
        </a> --}}
      </div>
    </div>

    <div class="card-header text-center" style="background-color: #1D6DCF;color: white;">
      <h4>Berita Terkini</h4>
    </div>

    <div class="row">
      @foreach ($news as $item)
        <div class="col-sm-6">
          <div class="card m-3">
            <div class="card-header text-center">
              <h4>{{ $item->title }}</h4>
            </div>
            <div class="card-body text-center">
              {{-- if image null --}}
              @if ($item->image != null)
                <img src="{{ asset('img/' . $item->image) }}" alt="{{ $item->title }}" class="img-fluid">
              @endif
              <p style="text-align: justify">{!! nl2br(e($item->body)) !!}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>

  </div>

</body>

</html>
