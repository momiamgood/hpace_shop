@extends('shop.layouts.main_layout')
@section('content')
    <main class="products_page">
        <aside>
            <h2 class="filters_title">Фильтры</h2>
            <div class="filter-item">
                <h3>Категория</h3>

            </div>
        </aside>
        <div class="product_list">

            <div class="product_card">
                <img class="product_cover" src="" alt="">

                <div class="product_card_footer">
                    <div class="product_card_titles">
                        <h3>Заголовок товара</h3>
                        <p>589 р</p>
                    </div>
                    <button>Добавить в корзину</button>
                </div>
            </div>

        </div>
    </main>
@endsection
