<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brainster academies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://fontawesome.com/v5.15/icons/pen-square?style=solid">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-yellow">
        <div class="container">
            <a class="navbar-brand text-uppercase text-dark" href="{{ route('brainster.index') }}">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i id="navbar-toggle-icon" class="bi bi-list"></i>
                </button>
                <div class="row">
                    <div class="col-12">
                        <img src="/images/logo_footer_black.png" width="45" id="logo" class="ms-3" />
                    </div>
                    <div class="col-12">
                        <h6 class="logo">Brainster</h6>
                    </div>
                </div>
            </a>
            <!-- <button class="click_main fa-bar-icon"><i class="fa fa-bars"></i></button> -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- <i class="fa fa-times nav-hide" id="click2"></i> -->
                <ul class="nav">
                    <li>
                        <a class="nav-link text-dark font" href="https://codepreneurs.brainster.co" target="_blank">Академија за програмирање</a>
                    </li>
                    <li>
                        <a class="nav-link text-dark font" href="https://marketpreneurs.brainster.co" target="_blank">Академија за маркетинг</a>
                    </li>
                    <li>
                        <a class="nav-link text-dark font" href="https://design.brainster.co" target="_blank">Академија
                            за дизајн</a>
                    </li>
                    <li>
                        <a class="nav-link text-dark font" href="https://blog.brainster.co/" target="_blank">Блог</a>
                    </li>
                </ul>

                @yield('button')


                <button type="button" class="btn btn-danger btn-sm ms-5 p-2" data-bs-toggle="modal" data-bs-target="#modalForm">
                    Вработи наш
                    студент
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                    <form action="{{ route('brainster.companyInfo') }}" method="post">
                        @csrf
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel">Вработи наши студенти</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-secondary">Внесете Ваши информации за да стапиме во контакт:</p>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Е-мејл</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label id="phone" for="exampleInputPassword1" class="form-label">Телефон</label>
                                        <input type="text" class="form-control" id="phone" name="phone">
                                    </div>
                                    <div class="mb-3">
                                        <label id="company" for="exampleInputPassword1" class="form-label">Компанија</label>
                                        <input type="text" class="form-control" id="company" name="company">
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="submit">Испрати</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>



    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src=/js/main.js></script>

</body>

</html>