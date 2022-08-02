<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">My blog</h5>
    <nav class="my-2 mt-2 my-md-0 mr-md-3 ms-md-auto"> {{-- ms-md-auto--}}
        <a class="p-2 text-white" href="{{ route('home') }}">Главная</a>
        <a class="p-2 text-white" href="{{ route('about') }}">Про нас</a>
       <a class="me-2 p-2 text-white" href="{{ route('contact') }}">Контакты</a> {{-- me-2--}}
       <a class="me-2 p-2 text-white" href="{{ route('contact-data') }}">Сообщения</a> {{-- me-2--}}
    </nav>
    <a class="btn btn-warning" href="/review">Отзывы</a>
</div>

