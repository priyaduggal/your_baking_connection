<template>
  <span>{{ total }}</span>
</template>

<script>
import { NumberFormat } from "@coders-tm/vue-number-format";
import { useDataStore } from "stores/DataStore";

export default {
  name: "NumberFormat",
  props: ["amount"],
  data() {
    return {
      total: 0,
      number: undefined,
    };
  },
  created() {
    this.number = new NumberFormat(this.DataStore.money_config);
    this.total = this.number.format(this.amount);
  },
  watch: {
    amount(newval, oldval) {
      this.total = this.number.format(newval);
    },
  },
  setup() {
    const DataStore = useDataStore();
    return {
      DataStore,
    };
  },
};
</script>
