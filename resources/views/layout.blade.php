<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" >
</head>
<body class="bg-dark text-white">


<! --верхняя шапка проекта-->

<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom ">
    <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
        <span class="fs-4 text-white ">DILDO-SHOP</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="White" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z"/>
        </svg>
    </a>
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto text-white">
        <a class="me-3 py-2 link-body-emphasis text-white" href="/">Главная</a>
        <a class="me-3 py-2 link-body-emphasis text-white" href="/about">Все про дилдо</a>
        <a class="me-3 py-2 link-body-emphasis text-white" href="/abot">Все про сайт</a>
        <a class="me-3 py-2 link-body-emphasis text-white" href="/support">Поддержка</a>
        <a class="me-3 py-2 link-body-emphasis text-white" href="/review">Оставить отзыв</a>
    </nav>
</div>
</div>
<div class="container">


        @yield('main_content')
</div>
<h1> </h1>
</body сlass="bg-dark text-white">
</html>
