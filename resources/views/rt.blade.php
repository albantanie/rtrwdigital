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
  <script src="{{ asset('js/jquery.js') }}"></script>

  <div class="card m-3">
    <div class="card-header text-center" style="background-color: #1D6DCF;color: white;">
      <div class="d-flex justify-content-between">
        <h4>Welcome, Pak RT</h4>
        <a href="/logout" type="button" class="btn btn-dark">
          Logout
        </a>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <a href="{{ route('guest.index') }}" type="button"
          class="btn btn-outline-dark col-sm-5 pt-4 pb-4 mb-3 container">
          Lihat Laporan Tamu
        </a>
        <a href="/funds" type="button" class="btn btn-outline-dark col-sm-5 pt-4 pb-4 mb-3 container">
          Lihat Pendaftar Bantuan Sosial
        </a>
      </div>
    </div>

    <div class="accordion accordion-flush mb-3  " id="news-accordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Buat berita
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group mb-3">
                <label for="title">Judul</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Judul" required>
              </div>
              <div class="form-group mb-3">
                <label for="body">Isi Berita</label>
                <textarea class="form-control" id="body" name="body" required></textarea>
              </div>
              <div class="form-group mb-3">
                <label for="image">Gambar</label>
                <input type="file" class="form-control-file" id="image" name="image">
              </div>
              <button type="submit" class="btn btn-primary w-100">Post Berita</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="card-header text-center" style="background-color: #1D6DCF;color: white;">
      <h4>Berita Terkini</h4>
    </div>

    {{-- Looping Berita --}}
    <div class="row">
      @foreach ($news as $item)
        <div class="col-sm-6">
          <div class="card m-3">
            <div class="card-header text-center">
              <h4 class="text-bg-primary">{{ $item->title }}</h4>
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

    <script>
      $("textarea").each(function() {
        this.setAttribute("style", "height:" + (this.scrollHeight) + "px;overflow-y:hidden;");
      }).on("input", function() {
        this.style.height = "auto";
        this.style.height = (this.scrollHeight) + "px";
      });
    </script>

  </div>

</body>

</html>
