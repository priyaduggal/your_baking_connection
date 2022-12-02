import { defineStore } from "pinia";

export const useDataStorePersisted = defineStore("datastorepersisted", {
  state: () => ({
    dark_mode: false,
    app_language: "en",
  }),

  // getters: {
  //   doubleCount(state) {
  //     return state.counter * 2;
  //   },
  // },

  actions: {},
  persist: true,
});
