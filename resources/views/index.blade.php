@extends('shop.layouts.main_layout')

@section('content')
    <main>
        <!-- ТОП ТОВАРОВ -->
        <div class="main-page-block">
            <h2>Топ товаров</h2>
            <div class="products-list">
                <a class="product-card" href="">
                    <div>
                        <img src="@vite('resources/assets/products/dt.png')" alt="product-card">
                        <h3>Кто-то что-что</h3>
                        <p class="card-price">3434 p</p>
                    </div>
                </a>
                <a class="product-card" href="">
                    <img src="@vite('resources/assets/products/dt.png')" alt="product-card">
                    <div>
                        <h3>Кто-то что-что</h3>
                        <p class="card-price">3434 p</p>
                    </div>
                </a>
                <a class="product-card" href="">
                    <img src="@vite('resources/assets/products/dt.png')" alt="product-card">
                    <div>
                        <h3>Кто-то что-что</h3>
                        <p class="card-price">3434 p</p>
                    </div>
                </a>
                <a class="product-card" href="">
                    <img src="@vite('resources/assets/products/dt.png')" alt="product-card">
                    <div>
                        <h3>Кто-то что-что</h3>
                        <p class="card-price">3434 p</p>
                    </div>
                </a>
            </div>
            <button class="action-btn">Перейти в Каталог</button>
        </div>

        <!-- ГАРАНТИИ -->

        <div class="main-page-block">
            <h2>Гарантии</h2>
            <div class="guarantees-list">
                <div class="guarantees-card">
                    <h3>01</h3>
                    <h3>Поддержка</h3>
                    <p>После покупки наших продуктов вы не останетесь с проблемой один на один</p>
                </div>
                <div class="guarantees-card">
                    <h3>02</h3>
                    <h3>Качественный код</h3>
                    <p>Тут какой-то крутой текст о том какой крутой у нас код</p>
                </div>
                <div class="guarantees-card">
                    <h3>03</h3>
                    <h3>Качественный код</h3>
                    <p>Тут какой-то крутой текст о том какой крутой у нас код</p>
                </div>
                <div class="guarantees-card">
                    <h3>04</h3>
                    <h3>Качественный код</h3>
                    <p>Тут какой-то крутой текст о том какой крутой у нас код</p>
                </div>
            </div>
        </div>

        <!-- FQA-->

        <div class="main-page-block">
            <h2>FQA</h2>
            <div class="accordion fqa" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Что вы делаете?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
