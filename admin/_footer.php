
    <footer class="footer container-fluid">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a class="logo d-flex align-items-center py-0 navbar-brand" href="/">
                    <img src="/<?=$additional[5]?>" alt="">
                    <span class="d-flex flex-column align-items-end red ml-2">
                        <span class="h2 font-weight-bold mb-0"><?=$additional[2]?></span>
                        <span class=""><?=$additional[68]?></span>
                    </span>
                </a>
                <div class="d-flex align-items-center justify-content-around w-100 mt-2">
                    <a class="red h5" href="http://aqua-teplo.ru">aqua-teplo.ru</a>
                    <a class="red h5" href="https://okean-tepla.ru">okean-tepla.ru</a>
                    <a class="red h5" href="http://claytonrussia.ru">claytonrussia.ru</a>
                </div>
            </div>
            <div class="d-flex flex-column align-items-center">
                <span class="h4 font-weight-bold">Работаем <?=$additional[9]?></span>
                <a class="mb-2 gray font-weight-bold h4" href="tel:<?=str_replace(array(' ','(',')','-'),'',$additional[4])?>"><?=$additional[4]?></a>
                <button type="button" class="btn btn-orange" data-toggle="modal" data-target="#exampleModalCenter">Заказать звонок</button>
            </div>
            <div class="d-flex w-50">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa3a6c8ba48d149a67fce08a7dd00952dc4677b4df1c945ce2eaaa2b8048a106f&amp;width=100%25&amp;height=200&lang=ru_RU&scroll=true"></script>
            </div>
        </div>
    </footer>