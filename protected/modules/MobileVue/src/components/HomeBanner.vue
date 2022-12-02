<template>
  <template v-if="DataStore.banner_loading">
    <q-skeleton height="130px" />
  </template>
  <template v-else>
    <template v-if="hasData">
      <swiper :slidesPerView="1" :spaceBetween="0" :loop="true" class="q-mb-md">
        <swiper-slide
          v-for="(items, index) in DataStore.banner"
          :key="items.banner_id"
          :name="index"
          style="height: 130px"
        >
          <q-img
            :src="items.image"
            class="fit radius10"
            fit="cover"
            loading="lazy"
            spinner-color="primary"
            spinner-size="md"
          />
        </swiper-slide>
      </swiper>
    </template>
  </template>
</template>

<script>
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import { useDataStore } from "stores/DataStore";

export default {
  name: "HomeBanner",
  components: {
    Swiper,
    SwiperSlide,
  },
  data() {
    return {
      loading: false,
      slide: 1,
      data: [],
    };
  },
  setup() {
    const DataStore = useDataStore();
    return { DataStore };
  },
  mounted() {
    if (Object.keys(this.DataStore.banner).length <= 0) {
      this.DataStore.getBanner();
    }
  },
  computed: {
    hasData() {
      if (this.DataStore.banner.length > 0) {
        return true;
      }
      return false;
    },
  },
  methods: {},
};
</script>
