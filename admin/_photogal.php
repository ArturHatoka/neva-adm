<main class="main container-fluid">
    <? include('_slider_on_main.php'); ?>

    <section class="container my-5">
        <h2 class="text-center mb-2 mt-3"><?=$seo['h1']?></h2>

        <?
        $img_ = mysql_query("SELECT * FROM ".MySQLprefix."_photogal WHERE p_id=31 ORDER BY sort_id ASC");
        if($img_ && mysql_num_rows($img_)>0){
        ?>
        <div class="d-flex row pl-md-5 pr-md-5 m-0 align-items-stretch">
            <?
            while($img = mysql_fetch_assoc($img_)){
                ?>
            <div class="col-12 col-sm-6 col-md-4 col-xl-3 mt-2 mb-2">
                <a href="/<?=$img['logo']?>" class="d-flex w-100 p-3  bg-lght-blue brd-rad-10 production-card flex-column h-100 align-items-center" data-fancybox="gallery3" data-caption="<?=$img['name']?>">
                    <img class="d-flex mw-100 w-100 h-auto brd-rad-10" src="/<?=$img['logo']?>" alt="">
                    <h5 class="text-center pt-2 mb-auto mt-auto black"><?=$img['name']?></h5>
                </a>
            </div>
            <?php
            }
            ?>
        </div>
    <?php
    }
    ?>
    </section>
</main>

