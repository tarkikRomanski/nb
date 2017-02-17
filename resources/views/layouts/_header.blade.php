@section('header')
    <header class="container-fluid" id="main-menu-block">
        <div class="row">
            <nav class="container">
                <div class="row">
                    <div class="col-2" id="logo">
                        {{ link_to_route('index', '') }}
                    </div>
                    <ul class="col-5" id="main-menu">
                        <li>
                            {{ link_to_route('index', 'Портфолио', [], ['class'=>($route=='index')?'active':'']) }}
                        </li>
                        <li>
                            {{ link_to_route('uslugi', 'Услуги', [], ['class'=>($route=='uslugi')?'active':'']) }}
                        </li>
                        <li>
                            {{ link_to_route('kontakti', 'Контакты', [], ['class'=>($route=='kontakti')?'active':'']) }}
                        </li>
                        <li>
                            {{ link_to_route('blog', 'Блог', [], ['class'=>($route=='blog')?'active':'']) }}
                        </li>
                    </ul>
                    <div class="col-2 phone"><a href="tel:{{   str_replace(')','',str_replace('(','',str_replace(' ','',trim($phone)))) }}">{{ $phone }}</a></div>
                    <div class="col-1 language-container">
                        <p id="language" class="arrow">ru</p>
                        <ul>
                            <li>ru</li>
                            <li>en</li>
                        </ul>
                    </div>
                    <div class="col-2 brif">
                        {{ Html::link($brif, 'Заполнить БРИФ', ['target'=>'_blank']) }}
                    </div>
                </div>
            </nav>
        </div>
    </header>
@show