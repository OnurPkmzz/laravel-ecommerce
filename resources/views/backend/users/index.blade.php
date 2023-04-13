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
                            <a class="nav-link" href="/users">
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


                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Sıra no</th>
                                <th scope="col">Ad soyad</th>
                                <th scope="col">E-posta</th>
                                <th scope="col">Durum</th>
                                <th scope="col">İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($users) > 0)
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if($user->is_active == 1)
                                            <span class="badge bg-success">Aktif</span>
                                            @else
                                            <span class="badge bg-danger">Pasif</span>
                                            @endif
                                        </td>

                                        <td>
                                        <ul class="nav float-start">
                                            <li class="nav-item">
                                                <a class="nav-link text-black" href="{{url("/users/$user->user_id/edit")}}">
                                                    <span data-feather="edit"></span>
                                                    Güncelle
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link list-item-delete text-black" href="{{url("/users/$user->user_id")}}">
                                                    <span data-feather="trash"></span>
                                                    Sil
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-black" href="/users">
                                                    <span data-feather="lock"></span>
                                                    Şifre değiştir
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5">
                                        <p class="text-center">herhangi bir kullanıcı bulunamadı</p>
                                    </td>
                                </tr>
                            @endif


                        </tbody>
                    </table>
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
