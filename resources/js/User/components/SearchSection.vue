<template>
    <div class="container-fluid main">
    <div class="second_section">        
        <ul class="second_navbar">
            <li class="second_navbar_item">
                <img src="/public/img/logo/point.svg" alt="" class="second_navbar_img">
                <div class="second_navbar_descr">Автобус</div>
            </li>
            <li class="second_navbar_item">
                <img src="/public/img/logo/credit-card.svg" alt="" class="second_navbar_img">
                <div class="second_navbar_descr">Стипендия</div>
            </li>
            <li class="second_navbar_item">
                <img src="/public/img/logo/home.svg" alt="" class="second_navbar_img">
                <div class="second_navbar_descr">Аренда</div>
            </li>
            <li class="second_navbar_item">
                <img src="/public/img/logo/burger.svg" alt="" class="second_navbar_img">
                <div class="second_navbar_descr">Столовая</div>
            </li>
            <li class="second_navbar_item">
                <img src="/public/img/logo/book.svg" alt="" class="second_navbar_img">
                <div class="second_navbar_descr">Расписание</div>
            </li>
            <li class="second_navbar_item">
                <img src="/public/img/logo/fire.svg" alt="" class="second_navbar_img">
                <div class="second_navbar_descr">Мероприятия</div>
            </li>
            <li class="second_navbar_item">
                <img src="/public/img/logo/drama.svg" alt="" class="second_navbar_img">
                <div class="second_navbar_descr">Театры</div>
            </li>
            <li class="second_navbar_item">
                <img src="/public/img/logo/moon.svg" alt="" class="second_navbar_img">
                <div class="second_navbar_descr">Правила</div>
            </li>
            <li class="second_navbar_item">
                <img src="/public/img/logo/cross.svg" alt="" class="second_navbar_img">
                <div class="second_navbar_descr">Здоровье</div>
            </li>
        </ul>
        
<div class="search-container">
    <input type="text" class="custom-input" placeholder="Введите текст">
    <span class="search-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
            <path d="M10.5 0C4.693 0 0 4.693 0 10.5S4.693 21 10.5 21c2.214 0 4.284-.743 5.934-1.98l5.354 5.354 1.414-1.414-5.354-5.354C20.257 14.784 21 12.714 21 10.5 21 4.693 16.307 0 10.5 0zM10.5 18C6.91 18 4 15.09 4 10.5S6.91 3 10.5 3 17 5.91 17 10.5 14.09 18 10.5 18z"/>
        </svg>
    </span>
</div>
    
    </div>
</div>
    
</template>

<script>

document.addEventListener("DOMContentLoaded", function() {
    const inputField = document.querySelector('.custom-input');

    inputField.addEventListener('focus', () => {
        inputField.placeholder = ''; 
        inputField.value = ''; 
    });
    
    inputField.addEventListener('blur', () => {
        if (inputField.value === '') {
            inputField.placeholder = 'Введите текст'; 
        }
    });
});


</script>

<style>
.main {
    background-color:rgba(12,187,24,.79);
    padding:20px
}
.second_navbar {
    display:flex;
    justify-content:center;
    flex-wrap:wrap
}
.second_navbar_item {
    margin-right:30px
}
.second_navbar_img {
    display:block;
    margin:0 auto;
    max-width:100%;
    height:auto
}
.search-container {
    position:relative;
    width:100%;
    max-width:500px;
    margin:20px auto
}
.custom-input {
    width:100%;
    padding:10px 30px 10px 40px;
    box-sizing:border-box;
    border:1px solid #ccc;
    border-radius:4px
}
.custom-input:focus {
    outline:0
}
.search-icon {
    position:absolute;
    left:10px;
    top:50%;
    transform:translateY(-50%);
    color:#999;
    pointer-events:none
}

</style>