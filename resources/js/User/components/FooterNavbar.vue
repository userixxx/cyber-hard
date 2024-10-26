<template>
    <div class="container">
    <div class="sticky-footer">
        <div class="footer-nav">
          <button class="nav-button">
          </button>
          <button class="nav-button">       
          </button>
          <button class="nav-button central-button">
            <img src="../../../img/logo/navfooter/volume 1.svg" alt="Central Icon">
          </button>
          <button class="nav-button">        
          </button>
          <button class="nav-button">
            <img src="../../../img/logo/navfooter/menu-add.svg" alt="Icon 5">
          </button>
        </div>
      </div>
</div>

</template>
  
<script>
// document.addEventListener('DOMContentLoaded', () => {
//     const box = document.querySelector('.central-button');

//     box.addEventListener('click', () => {
//         box.classList.toggle('active');
//     });
// });

</script>
  
<style scoped>
.sticky-footer {
    position:fixed;
    bottom:0;
    left:50%;
    transform:translateX(-50%);
    width:auto;
    max-width:400px;
    height:80px;
    background-color:rgba(255,255,255,.8);
    z-index:1030;
    padding:0;
    margin-top:20px
}
.sticky-footer .footer-nav {
    display:flex;
    justify-content:space-between;
    align-items:center;
    height:100%;
    width:100%;
    padding:0 30px
}
.sticky-footer .footer-nav .nav-button {
    background:0 0;
    border:none;
    padding:0;
    cursor:pointer;
    margin:0 10px
}
.sticky-footer .footer-nav .nav-button img {
    width:40px;
    height:40px
}
.sticky-footer .footer-nav .central-button {
    transition:transform .5s ease
}
.sticky-footer .footer-nav .central-button img {
    width:60px;
    height:60px
}
@media (max-width:768px) {
    .sticky-footer {
        left:0;
        transform:none;
        width:100vw;
        max-width:none;
        padding:0 10px;
        margin-top:0
    }
    .sticky-footer .footer-nav {
        padding:0
    }
    .sticky-footer .footer-nav .nav-button {
        margin:0
    }
}
.central-button.active {
    transform:scale(1.5)
}
</style>
  