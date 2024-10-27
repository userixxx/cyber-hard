<template>
    <div class="container">
    <div class="user_profile">
        <img src="/public/img/logo/aik.svg" alt="" class="aik_img">
        <div class="aik_name tac">Айк Бабаханян</div>
        <div class="aik_number tac">+7 777 777 77 77</div>
        <div class="aik_mail tac">SettrihYonovich@yandex.ru</div>
        <div class="main_block">
            <div class="vacancy_prime">
                <div class="job">Вуз</div>
                <div class="solary norm_txt">РГЭУ(РИНХ)</div>
            </div>
            <div class="vacancy_prime">
                <div class="job">Факультет</div>
                <div class="solary norm_txt">КТиИБ</div>
            </div>
            <div class="vacancy_prime">
                <div class="job">Группа</div>
                <div class="solary norm_txt">ПИ-342</div>
            </div>
            <div class="vacancy_prime">
                <div class="job">Выиграно хакатонов</div>
                <div class="solary norm_txt">9</div>
            </div>
            

        </div>
        <div class="f jcc">
            <div class="job">Обучение</div>
            <button class="btn g">оплатить</button>
        </div>
        <div class="big_title tac">Итоги сессии</div>

        <div class="main_block">
            <div class="vacancy_prime">
                <div class="job bold">Дисциплина</div>
                <div class="solary bold nn">Оценка</div>
            </div>
            <div class="vacancy_prime">
                <div class="job ">Информационная безопасность</div>
                <div class="solary nn">70</div>
            </div>
            <div class="vacancy_prime">
                <div class="job ">Интернет маркитеинг</div>
                <div class="solary nn">81</div>
            </div>
            <div class="vacancy_prime">
                <div class="job ">Мобильные технологии</div>
                <div class="solary nn">81</div>
            </div>
            <div class="vacancy_prime">
                <div class="jobd nn">Производственная практика</div>
                <div class="solary nn ">Зачет</div>
            </div>
            <div class="vacancy_prime">
                <div class="job bold ">Пересдачи</div>
                <div class="solary bold nn">Дата</div>
            </div>
            <div class="vacancy_prime">
                <div class="job ">Разработка программных систем</div>
                <div class="solary nn ">10.12.2024</div>
            </div>           
        </div>
    </div>
</div>
    
</template>

<script>

</script>

<style>
.aik_img {
    display:block;
    margin:0 auto;
    margin-bottom:10px;
    margin-top:30px
}
.tac {
    text-align:center
}
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
.norm_txt {
    font-size:20px
}
.f {
    display:flex
}
.jcc {
    justify-content:center
}
.btn {
    border:1px solid #000;
    border-radius:10px;
    margin:10px
}
.g {
    border:none;
    background-color:#0abe00;
    transform:translateY(-10px);
    color:#fff
}
.big_title {
    font-size:40px
}
.nn {
    font-size:22px
}


</style>