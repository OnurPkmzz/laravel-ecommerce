<!doctype html>
<html lang="tr" data-bs-theme="auto">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yönetim Paneli @yield("title")</title>
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

                    @include('backend.shared.leftnav')

                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">@yield("title")</h1>
                    <div class="btn-group me-2">
                        <a href="@yield("btn_url")" class="btn bt-sm btn-outline-success"><span data-feather="@yield("btn_icon")"></span> @yield('btn_label')</a>
                    </div>
                </div>

                <h2>@yield("subtitle")</h2>
                <div class="table-responsive">
                    @yield("content")
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
