<main class="main container-fluid">
    <? include('_slider_on_main.php'); ?>

    <section class="container-fluid bg-white py-5">
        <div class="container d-flex">
            <div class="d-flex col-6 flex-column">
                <h2 class="text-center mb-2 mt-3"><?=$seo['h1']?></h2>
                <p><?=$seo['text']?></p>
            </div>
            <div class="d-flex col-6">
                <form action="" class="d-flex flex-column ">
                    <h4 class="w-75">Для отправки заполненного опросного листа воспользуйтесь формой</h4>
                    <input type="text" class="sm-input mb-2" placeholder="Ваше имя">
                    <input type="text" class="sm-input mb-2" placeholder="Ваш e-mail">
                    <label class="mb-0 text-center w-50 font-weight-bold h5" for="file">Ваш опросный лист</label>
                    <input type="file" class="sm-input mb-2" id="file" name="file">
                    <input type="text" class="sm-input mb-2" placeholder="Тема сообщения">
                    <textarea class="sm-input mb-2" name="" id="" cols="30" rows="10" placeholder="Сообщение"></textarea>
                    <button type="submit" class="btn btn-orange w-50">Отправить</button>
                </form>
            </div>
        </div>
    </section>
</main>