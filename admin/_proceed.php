	<main class="main container-fluid">
        <? include('_slider_on_main.php'); ?>

        <section class="container my-5">
            <h2 class="text-center mb-3 mt-3"><?=$seo['h1']?></h2>
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
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-around mt-3">
                <p><?=$seo['text']?></p>
            </div>
        </section>

	</main>