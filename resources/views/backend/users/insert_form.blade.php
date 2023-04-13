<!doctype html>
<html lang="tr" data-bs-theme="auto">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard users page</title>
    @vite('resources/css/app.css')
    @vite('resources/css/dashboard.css')

</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Laravel Ecommarce</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search"
            aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Çıkış</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">

                                <span data-feather="home" class="align-text-bottom"></span>
                                Yönetim paneli
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href={{url("/users")}}>
                                <span data-feather="users" class="align-text-bottom"></span>
                                Kullanıcılar
                            </a>
                        </li>

                    </ul>


                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Kullanıcılar</h1>
                    <div class="btn-group me-2">
                        <a href="/users/create" class="btn bt-sm btn-outline-danger">Yeni Ekle</a>
                    </div>
                </div>

                <h2>Yeni Kullanıcı Ekle</h2>
                <div class="table-responsive">
                    <form action="{{url("/users")}}" method="POST">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="name" class="form-label">Ad Soyad</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Ad soyad giriniz">
                                </div>
                                <div class="col-lg-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Mail adresi giriniz">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="Password" class="form-label">Şifre Giriniz</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Şifre giriniz">
                                </div>
                                <div class="col-lg-6">
                                    <label for="password2" class="form-label">Şifre tekrarı</label>
                                    <input type="password" class="form-control" id="password2" name="password2"
                                        placeholder="Şifrenizi tekrar giriniz">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" id="is_admin"
                                            name="is_admin" checked>
                                        <label class="form-check-label" for="is_admin">
                                            Yetkili Kullanıcı
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" id="is_active"
                                            name="is_active" checked>
                                        <label class="form-check-label" for="is_active">
                                            Aktif Kullanıcı
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success">Kaydet</button>
                                </div>
                            </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>
    @vite('resources/js/app.js')

</body>

</html>
