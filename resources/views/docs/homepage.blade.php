<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cashier API DOCS</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body style="background: #fff">
    <div class="col-lg-8 mx-auto p-4 py-md-5">
        <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
          <a href="/" class="d-flex fs-3 fw-bold align-items-center text-dark text-decoration-none">
            CASHIER API DOCS
          </a>
        </header>

        <main>
          <h1>Get started with Cashier</h1>
          <p class="fs-5 col-md-8">Quickly and easily get started with cashier products api, for your project learning and more efficiency for you to learn about api</p>

          <div class="mb-5">
            <a href="{{ route('introduction') }}" class="btn btn-primary btn-lg px-4">Lets touch</a>
          </div>

          <hr class="col-3 col-md-2 mb-5">

          <div class="row g-5">
            <div class="col-md-6">
              <h2>Cashier Repository</h2>
              <p>Ready to beyond the cashier api? Check out these open source projects that you can quickly access source code on github</p>
              <ul class="icon-list ps-0">
                <li class="d-flex align-items-start mb-1"><a href="#" rel="noopener" target="_blank">Cashier API Repository</a></li>
              </ul>
            </div>

            <div class="col-md-6">
              <h2>Guides</h2>
              <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
              <ul class="icon-list ps-0">
                <li class="d-flex align-items-start mb-1"><a href="#">Cashier API quick start guide</a></li>
                <li class="d-flex align-items-start mb-1"><a href="#">Cashier API Webpack guide</a></li>
                <li class="d-flex align-items-start mb-1"><a href="#">Cashier API Parcel guide</a></li>
                <li class="d-flex align-items-start mb-1"><a href="#">Cashier API Vite guide</a></li>
                <li class="d-flex align-items-start mb-1"><a href="#">Contributing to Cashier API</a></li>
              </ul>
            </div>
          </div>
        </main>
        <footer class="pt-5 my-5 text-muted border-top">
          Created by the Alsav System team &middot; &copy; <span id="year"></span>
        </footer>
      </div>

      <script>
        document.getElementById("year").innerText = new Date().getFullYear()
      </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
