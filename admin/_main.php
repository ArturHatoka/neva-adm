	<main class="main container-fluid">

        <? include('_slider_on_main.php'); ?>

        <section class="container my-5">
            <h2 class="text-center mb-2 mt-3">О компании</h2>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-around">
                <?=$additional[57]?>
            </div>
        </section>

        <section class="container my-5">
            <h2 class="text-center mb-2 mt-3">Продукты / услуги</h2>
            <div class="d-flex row pl-md-5 pr-md-5 m-0 align-items-stretch">
                <?
                $uslugi = mysql_query("SELECT ".MySQLprefix."_categories.name, ".MySQLprefix."_urls.url, ".MySQLprefix."_categories.logo FROM ".MySQLprefix."_categories, ".MySQLprefix."_urls WHERE ".MySQLprefix."_categories.logo!='' AND ".MySQLprefix."_categories.p_id=0 AND ".MySQLprefix."_urls.target_type='categories' AND ".MySQLprefix."_urls.target_id=".MySQLprefix."_categories.id");
                if($uslugi)
                    while($usluga = mysql_fetch_assoc($uslugi)){
                        ?>
                <div class="col-12 col-sm-6 col-md-4 mt-2 mb-3 ">
                    <a href="/<?=$usluga['url']?>/" class="position-relative d-flex w-100 bg-white brd-rad-10 production-card flex-column justify-content-center h-100 align-items-center">
                        <img class="d-flex mw-100 w-100 h-auto brd-rad-10" src="/<?=$usluga['logo']?>" alt="">
                        <h5 class="text-center h-100 w-100 px-5 mb-auto brd-rad-10 mt-auto clr-white-shad position-absolute h-100 w-100 px-5 d-flex align-items-center justify-content-center">
                            <?=$usluga['name']?>
                        </h5>
                    </a>
                </div>
                        <?
                    }
                ?>
            </div>
        </section>

        <?
        $img_ = mysql_query("SELECT * FROM ".MySQLprefix."_photogal WHERE p_id=31 ORDER BY sort_id ASC");
        if($img_ && mysql_num_rows($img_)>0){
            ?>
            <section class="container my-5">
                <h2 class="text-center mb-2 mt-3">Реализованные строительные объекты</h2>
                <div class="d-flex row pl-md-5 pr-md-5 m-0 align-items-stretch slick-slider">
                    <?
                    while($img = mysql_fetch_assoc($img_)){
                        ?>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-2 mb-2 ">
                            <a href="/galery/" class="d-flex w-100 p-3 bg-white brd-rad-10 production-card flex-column h-100 align-items-center">
                                <img class="d-flex mw-100 w-100 h-auto brd-rad-10" src="/<?=$img['logo']?>" alt="">
                                <h5 class="text-center pt-2 mb-auto mt-auto black"><?=$img['name']?></h5>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="src2/Портфолио%20%20ООО%20«НЕВА-ПРИНТ».pdf" target="_blank" class="mt-3 btn  btn-orange">Открыть портфолио</a>
                </div>
            </section>
            <?
        }
        ?>

        <section class="container my-5">
            <h2 class="text-center mb-4 mt-3">Партнеры</h2>
            <div class="d-flex w-100 justify-content-center align-items-stretch flex-wrap slick-slider">
                <?
                $result = mysql_query("SELECT * FROM ".MySQLprefix."_partners2 ORDER BY id ASC");
                if ($result)
                    while ($row = mysql_fetch_assoc($result)){
                        ?>
                        <div class="col-2">
                            <a class="w-100 align-items-center d-flex" href="../<?=$row['logo']?>" title="" data-fancybox="gallery2" data-caption="">
                                <img class="w-100" src="../<?=$row['logo']?>" alt="" />
                            </a>
                        </div>
                        <?
                }
                ?>
            </div>
        </section>

        <section class="container py-4">
            <h2 class="text-center pb-0 ">Заказчики</h2>
            <div class="d-flex w-100 justify-content-center align-items-stretch flex-wrap slick-slider2">
                <?
                $result = mysql_query("SELECT * FROM ".MySQLprefix."_partners ORDER BY id ASC");
                if ($result)
                    while ($row = mysql_fetch_assoc($result)){
                        ?>
                        <div class="col-1">
                            <div class="d-flex flex-column align-items-center justify-content-center w-100">
                                <img src="../<?=$row['logo']?>" class="d-block w-100" alt="...">
                                <span class="font-weight-bold text-center"><?=$row['name']?></span>
                            </div>
                        </div>
                        <?
                    }
                ?>
            </div>
        </section>

        <section class="container my-5">
            <h2 class="text-center mb-2 mt-3"><?=$seo['h1']?></h2>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-around">
                <p><?=$seo['text']?></p>
            </div>
        </section>
	</main>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Обратный звонок</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/src2/mail/send-mail.php" method="post" class="d-flex flex-column align-items-center w-auto p-2">
                        <h4 class="black h4 text-center mb-3">Мы перезвоним Вам в течение 3-х минут</h4>
                        <input class="sm-input" type="text" name="name" placeholder="Ваше имя">
                        <input class="sm-input mt-4" type="text" name="phone" placeholder="8 (___) __-__-__">
                        <button type="submit" class="btn bg-red-gr mt-3">Отправить заявку</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-orange" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>