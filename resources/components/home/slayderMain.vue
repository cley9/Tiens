<template>
  <div class="containerBanerSlay">
    <div class="rowBanerSlay">
      <swiper :spaceBetween="30" :centeredSlides="true" :autoplay="{
        delay: 2500,
        disableOnInteraction: false,
      }" :pagination="{
  clickable: true,
}" :navigation="true" :modules="modules">
        <swiper-slide>
            <img :src="'/storage/img/Baner/Principal/1.png'" class=" imgBanerSlay" alt="">
        </swiper-slide>
        <swiper-slide>
            <img :src="'/storage/img/Baner/Principal/2.png'" class=" imgBanerSlay" alt="">
        </swiper-slide>
        <swiper-slide>
            <img :src="'/storage/img/Baner/Principal/3.png'" class=" imgBanerSlay" alt="">
        </swiper-slide>
        <swiper-slide>
            <img :src="'/storage/img/Baner/Principal/4.png'" class=" imgBanerSlay" alt="">
        </swiper-slide>
        <!-- <div class="single-slider " style="background-image:url(https://www.tienslar.com/storage/banners/July2021/FNQWZ3Vz8wWTz3gm2lDt.png);">
          <div class="single-slider " style="background-image:url(https://www.tienslar.com/storage/slider1.png);">
             </div><div class="single-slider " style="background-image:url(https://www.tienslar.com/storage/banners/September2020/7G4FHNlYuE28Ljtjerzc.png);">
             </div><div class="single-slider " style="background-image:url(https://www.tienslar.com/storage/slider3.png);">
             </div>
             </div> -->
      </swiper>
      <!-- <div class="banerBoxSlay">
        <div class="columBoxSlay">
          <img :src="'/storage/img/SlayderPromocion/6.png'" class="imgBanerSlay" alt="" draggable="false">
        </div>
        <div class="columBoxSlay">
          <img :src="'/storage/img/SlayderPromocion/7.png'" class="imgBanerSlay" alt="" draggable="false">
        </div>
      </div> -->

    </div>
  </div>
</template>
  
<script>
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';
import { Autoplay, Pagination, Navigation } from 'swiper/modules';

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    const onSwiper = (swiper) => {
      // console.log(swiper);
    };
    const onSlideChange = () => {
      // console.log('slide change');
    };
    return {
      modules: [Autoplay, Pagination, Navigation],
    };
  },
  data() {
    return {
      days: 0,
      hours: 0,
      minutes: 0,
      seconds: 0,
    };
  },
  mounted() {
  },
  methods: {
   
  },

};

</script>
<style scoped>
.containerBanerSlay{
  display:flex;
  justify-content:center;
  align-content: center;
  width:100%;
  /* background: orange; */
  margin-bottom: 44px;
}
.center{
  display: flex;
  justify-content: center;
  align-items: center;
}
.swiper-slide{
  background: salmon;
    min-height: 638px;
  max-height: 638px;
}
.imgBanerSlay{
  width:100%;
  /* width:1900px; */
  /* min-height: 638px;
  max-height: 638px; */
  /* object-fit: cover; */
  /* image-rendering: pixelated; */
  /* border-radius: 6px; */
  
}
.banerBoxSlay{
  display:grid;
  grid-template-columns:auto auto;
}
@media(width >= 1051px){
  .rowBanerSlay{
    width:100%;
  }
  .banerBoxSlay{
    margin-bottom:40px;
  }
  .swiper{
    margin-bottom: 10px;
  }
  .columBoxSlay{
    padding:8px;
  }
  .swiper-slide{
    /* border-radius:80px; */
  }
}
@media( 631px <= width <= 1050px){
.rowBanerSlay{
    width:98%;
  }
   .banerBoxSlay{
    display: none;
    margin-bottom:40px;
  }
  .swiper{
    margin-bottom: 30px;
  }
}
@media(498px <= width <= 630px){
  .rowBanerSlay{
    width:98%;
  }
  .banerBoxSlay{
    display: none;
    margin-bottom:40px;
  }
  .swiper{
    margin-bottom: 20px;
  }
  .swiper-slide{

  }
  .columBoxSlay{
    padding:8px;
  }
  .imgBanerSlay{
    height:138px;
    /* object-fit: cover; */
    
  }
  
}
/*  */
@media(width < 498px){
  .rowBanerSlay{
    width:100%;
    /* height: 200px; */
  }
  .banerBoxSlay{
    display: none;
    margin-bottom:40px;
  }
  .swiper{
    margin-bottom: 20px;
  }
  .swiper-slide{
    /* height: 240px; */

  }
  .columBoxSlay{
    padding:8px;
  }
  .imgBanerSlay{
    /* width:100% !important; */
    /* height:328px !important; */
    /* object-fit: cover !important; */
    min-height: 236px;
  max-height: 236px;
    
  }
  
}
</style>