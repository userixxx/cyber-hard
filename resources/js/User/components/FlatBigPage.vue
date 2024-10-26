<template>
    <div class="container">
    <div id="simpleCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../../../img/hata_big.png" class="d-block w-100" alt="Image 1">
          </div>
          <div class="carousel-item">
            <img src="../../../img/hata_big.png" class="d-block w-100" alt="Image 2">
          </div>
          <div class="carousel-item">
            <img src="../../../img/hata_big.png" class="d-block w-100" alt="Image 3">
          </div>
          <div class="carousel-item">
            <img src="../../../img/hata_big.png" class="d-block w-100" alt="Image 4">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#simpleCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#simpleCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="price_hata">40 000 ₽ в месяц</div>
      <div class="type_hata">Квартира-студия 46 м2 </div>
      <div class="btn_hackthon f">
            
        <button class="btn big_btn grin">Позвонить</button>
        <button class="btn big_btn b">Написать</button>
    </div>
    <div class="hata_lock f">
        <img src="../../../img/logo/pin-location.svg" alt="" class="img_point mr_1">

        <div class="solary ">р-н Ворошиловский <br> ул. Ларина 42 с2 </div>
    </div>  

    <div class="about">
        <div class="title_about">О квартире</div>
        <div class="about_descr">Кол-во комнат: 1 <br>Общая площадь: 46 м2 <br>
            Площадь кухни: 20 м2<br> Этаж: 26<br> Ремонт: Евро<br>
        </div>
        <div class="title_about">Условия аренды</div>
        <div class="about_descr">Залог: 20 000 ₽ <br> Счётчики: включено в платеж </div>
    </div>


</div>



    
</template>

<script>

</script>

<style>
.price_hata {
    margin-top:20px;
    font-weight:400;
    font-size:34px
}
.btn_hackthon {
    justify-content:center;
    margin-top:20px
}
.f {
    display:flex;
}
.btn {
    border:1px solid #000;
    border-radius:10px;
    margin:10px
}
.big_btn {
    width:200px;
    color:#fff
}
.grin {
    background-color:#0abe00;
    border:none
}
.b {
    background-color:#1181f1;
    border:none
}
.hata_lock {
    margin-top:20px
}
.mr_1 {
    margin-right:10px
}
.solary {
    font-size:17px
}
.title_about {
    font-weight:400;
    font-size:35px
}
.about_descr {
    margin-left:13px
}

</style>