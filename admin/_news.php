<main class="main container-fluid">
    <? include('_slider_on_main.php'); ?>

    <section class="container my-5">
        <h2 class="text-center mb-2 mt-3"><?=$seo['h1']?></h2>
        <div class="d-flex w-100 flex-wrap align-items-center justify-content-around">
            <p><?=$seo['text']?></p>
        </div>
    </section>
</main>

<div class="wide">
			<?php include('_left.php'); ?>
			<div class="r-740<?php if($additional[29]==1){ ?> w-1024<?php } ?>">
				<div class="tree"><a href="/">Главная</a>/<a href="/news/">Новости</a>/<a><?=$seo['h1']?></a></div>
				<div class="pagetext">
					<h1><?=$seo['h1']?></h1>
					<?php
					$pic = '';
					$pics = explode('|', $seo['pic']);
					if(is_array($pics) && count($pics)>0)
						foreach($pics AS $picc)
							if(strlen($picc)>0 && $pic == '')
								$pic = $picc;
					if($pic != ''){
						?>
					<a class="mainnewpic" href="/<?=$pic?>">
						<img class="mainnewpic" src="/<?=$pic?>" />
						<b><?=date('d.m.Y',strtotime($seo['date_create']))?></b>
					</a>
						<?php
					}
					?>
					<?=$seo['comment']?>
				</div>
			</div>
		</div>