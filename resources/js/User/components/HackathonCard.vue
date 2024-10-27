<template>
    <div class="container">
    <div class="main_block">
        <div class="vacancy_prime">
            <div class="job">Южный IT-форум</div>
            <div class="solary">25 - 27 октября</div>
        </div>
        <div class="hackathon_descer">Южный ИТ-форумФорум программных<br>разработчиков Ростова-на-Дону<br>«Хакатон Осень 2024»</div>
        <div class="btn_hackthon f">
            
            <button class="btn">Стать участником</button>
            <button class="btn">Быть волонетром</button>
        </div>
        <div class="place ">
            <div class="place_name">Манеж ДГТУ</div>
            <img src="../../../img/logo/point.svg" alt="" class="place_img">
        </div>
        
    </div>

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
    margin-bottom:30px;
}
.vacancy_prime {
    display:flex;
    justify-content:space-between;
    margin-bottom:10px;
}
.job {
    font-size:22px;
}
.solary {
    font-size:17px;
}
.hackathon_descer {
    text-align:center;
}
.f {
    display:flex;
}
.btn_hackthon {
    justify-content:center;
    margin-top:20px;
}
.btn {
    border:1px solid #000;
    border-radius:10px;
    margin:10px;
}
.place {
    display:flex;
    justify-content:flex-end;
}
.place_name {
    margin-right:20px;
}
.place_img {
    transform:translateY(-8px);
}

</style>