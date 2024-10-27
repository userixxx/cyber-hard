<template>
    <div class="container">
    
    <section class="main_block">
        
        <div class="vacancy_prime">
            <div class="job">Web-Designer</div>
            <div class="solary">от 40 000 ₽</div>
        </div>
        <div class="criteria">
            <div class="status">Junior</div>
            <div class="exp">Без опыта</div>
            <div class="city">Ростов-на-Дону</div>
        </div>
        <div class="company">
            <div class="name_company">Центр-Инвест</div>
            <img src="/public/img/logo/invest.svg" alt="invest_logo" class="company_logo">
        </div>
        <div class="down_bar f">
            <div class="responss f">
                <button class="responss_btn">Откликнуться</button>
                <div class="resume">Резюме</div>
            </div>
            <div class="fresh f">
                <div class="percent">83%</div>
                <img src="/public/img/logo/pie-chart-01.png" alt="" class="percent_img">
            </div>
        </div>

       
    </section>
</div>
    
</template>

<script>

</script>

<style>
.main_block {
    border:1px solid #000;
    padding:33px;
    border-radius:10px;
    margin-top:40px;
    margin-bottom:30px
}
.vacancy_prime {
    display:flex;
    justify-content:space-between;
    margin-bottom:10px;
}
.job {
    font-size:22px
}
.solary {
    font-size:17px
}
.criteria {
    display:flex;
    justify-content:space-between
}
.status {
    font-size:20px
}
.exp {
    background-color:rgba(220,220,220,.63);
    padding:3px;
    border-radius:17px;
    font-size:17px;
    transform:translateX(-65px)
}
.city {
    font-size:17px;
    
}
.company {
    display:flex;
    height:30px;
    margin:20px 0;
}
.name_company {
    margin-left:20px;
    font-size:20px;
    margin-right:10px;
}
.f {
    display:flex
}
.company_logo {
    height:30px;
}
.down_bar {
    justify-content:space-between
}
.responss_btn {
    background-color:#0abe00;
    color:#fff;
    border:none;
    border-radius:10px;
    width:160px;
    margin-right:10px
}
.resume {
    font-size:16px
}
.resume {
    font-size:16px
}
.percent_img {
    max-width:100%;
    height:auto;
    object-fit:contain
}
</style>