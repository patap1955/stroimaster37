<div class="container">
    <div class="navigation" role="navigation">
        <div class="navbar-collapse collapse" id="buildpress-navbar-collapse" aria-expanded="false">
            <ul id="menu-main-menu" class="navigation--main  js-dropdown">
                <li id="menu-item" class="menu-item-type-post_type menu-item-object-page menu-item">
                    <a href="{{ route('index')}}">Главная</a>
                </li>
                <li id="menu-item" class="menu-item-type-post_type menu-item-object-page menu-item">
                    <a href="#">Услуги</a>
                    <ul  class="sub-menu">
                        @foreach($services as $service)
                        <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                            <a href="{{ route('page.service', ['service' => $service->slug]) }}">{{ $service->title }}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li id="menu-item" class="menu-item-type-post_type menu-item-object-page menu-item">
                    <a href="{{ route('page.price')}}">Прайс-лист</a>
                </li>
                <li id="menu-item" class="menu-item-type-post_type menu-item-object-page menu-item">
                    <a href="{{ route('page.contacts')}}">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</div>
