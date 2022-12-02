import { defineStore } from "pinia";
import APIinterface from "src/api/APIinterface";

export const useMenuStore = defineStore("menu", {
  state: () => ({
    data_info: {},
    data_share: [],
    open_at: {},
    opening_hours: {},
    money_config: [],
    maps_config: [],
    loadin_info: true,
    data_charge_type: {},
    data_estimation: {},
    data_distance: {},
    loading_menu: true,
    data_category: {},
    data_items: {},
    data_gallery: {},
    gallery_images: {},
    data_similar_items: {},
    loading_similar_items: false,
  }),

  persist: true,

  getters: {
    doubleCount(state) {
      return state.counter * 2;
    },
  },

  actions: {
    getMerchantInfo(merchantSlug) {
      this.loadin_info = true;
      APIinterface.getMerchantInfo(
        merchantSlug,
        APIinterface.getStorage("place_id")
      )
        .then((data) => {
          this.data_info[merchantSlug] = data.details.data;
          this.data_charge_type[merchantSlug] = data.details.charge_type;
          this.data_estimation[merchantSlug] = data.details.estimation;
          this.data_distance[merchantSlug] = data.details.distance;
          this.opening_hours[merchantSlug] = data.details.opening_hours;
          this.open_at[merchantSlug] = data.details.open_at;
          this.data_gallery[merchantSlug] = data.details.gallery;

          this.money_config = data.details.config;

          let Gallery = [];
          if (Object.keys(data.details.gallery).length > 0) {
            Object.entries(data.details.gallery).forEach(([key, items]) => {
              Gallery.push(items.image_url);
            });
            this.gallery_images[merchantSlug] = Gallery;
          }
        })
        .catch((error) => {
          this.data_info = [];
        })
        .then((data) => {
          this.loadin_info = false;
        });
    },
    geStoreMenu(merchantSlug) {
      this.loading_menu = true;
      APIinterface.geStoreMenu(merchantSlug)
        .then((data) => {
          this.data_category[merchantSlug] = data.details.data.category;
          this.data_items[merchantSlug] = data.details.data.items;
        })
        .catch((error) => {
          this.data_items = [];
          this.data_category = [];
        })
        .then((data) => {
          this.loading_menu = false;
        });
    },
    getSimilarItems(merchantId) {
      this.loading_similar_items = true;
      APIinterface.fetchDataPost("SimilarItems", "merchant_id=" + merchantId)
        .then((data) => {
          console.log(data);
          this.data_similar_items[merchantId] = data.details.data;
        })
        .catch((error) => {
          this.data_similar_items = {};
        })
        .then((data) => {
          this.loading_similar_items = false;
        });
    },
  },
});
