<template>
  <q-page padding class="flex flex-center">
    <div class="full-width">
      <swiper
        ref="swiperRef"
        :slides-per-view="1"
        :space-between="10"
        @swiper="onSwiper"
        @slideChange="onSlideChange"
        class="q-mb-md"
        :pagination="{
          dynamicBullets: true,
        }"
        :modules="modules"
      >
        <swiper-slide
          v-for="items in data"
          :key="items"
          class="row"
          style="height: 300px"
        >
          <q-img
            :src="items.image"
            style="max-width: 100%; height: 150px"
            fit="contain"
          />
          <div class="text-center fit q-pt-lg">
            <div class="font16 text-weight-bold q-mb-md line-normal">
              {{ items.title }}
            </div>
            <div class="text-weight-medium font14 text-grey line-normal">
              {{ items.sub_title }}
            </div>
          </div>
        </swiper-slide>
      </swiper>
    </div>

    <q-footer
      reveal
      class="transparent q-pl-md q-pr-md q-pb-md q-pt-md text-dark row items-center justify-between"
    >
      <q-btn
        flat
        text-color="grey"
        no-caps
        size="lg"
        label="Skip"
        @click="home"
      ></q-btn>

      <q-btn
        v-if="slide == 2"
        no-caps
        size="lg"
        label="Get Started"
        unelevated
        color="primary"
        text-color="white"
        @click="login"
      ></q-btn>
      <q-btn
        v-else
        no-caps
        size="lg"
        label="Next"
        unelevated
        color="primary"
        text-color="white"
        style="min-width: 120px"
        @click="nextSlide"
      ></q-btn>
    </q-footer>
  </q-page>
</template>

<script>
import { Swiper, SwiperSlide, useSwiper } from "swiper/vue";
import { ref, onMounted } from "vue";
import "swiper/css";
import "swiper/css/pagination";
import { Pagination } from "swiper";
import APIinterface from "src/api/APIinterface";

export default {
  name: "ScreenPage",
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    const swiperRef = ref();
    const slide = ref(0);
    const data = ref([
      {
        image: "onboarding-1.png",
        title: "Discover Places near you",
        sub_title:
          "It's simple to find the food you like. enter your address and let us do the rest.",
      },
      {
        image: "onboarding-2.png",
        title: "Order your customized items",
        sub_title:
          "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id libero pretium",
      },
      {
        image: "onboarding-3.png",
        title: "Faster delivery",
        sub_title:
          "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id libero pretium",
      },
    ]);

    const nextSlide = () => {
      swiperRef.value.$el.swiper.slideNext();
    };

    const onSlideChange = (data) => {
      slide.value = data.activeIndex;
    };

    return {
      data,
      slide,
      swiperRef,
      nextSlide,
      onSlideChange,
      modules: [Pagination],
    };
  },
  methods: {
    home() {
      console.log("home");
      APIinterface.setStorage("intro", 1);
      this.$router.replace("/home");
    },
    login() {
      console.log("login");
      APIinterface.setStorage("intro", 1);
      this.$router.replace("/user/login");
    },
  },
};
</script>
<style>
.swiper-pagination-bullet-active {
  background: #ff724c !important;
}
</style>
