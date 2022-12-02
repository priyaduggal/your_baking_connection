<template>
  <q-btn-toggle
    v-model="tips"
    toggle-color="secondary"
    :color="$q.dark.mode ? 'grey600' : 'mygrey'"
    :text-color="$q.dark.mode ? 'grey300' : 'dark'"
    no-caps
    no-wrap
    unelevated
    :options="tips_data"
    class="rounded-group2 small text-weight-bold line-1 q-pa-none"
    @click="updateTips"
    :disable="loading"
  />

  <q-dialog v-model="show_modal" position="bottom">
    <q-card>
      <q-toolbar class="text-primary top-toolbar q-pl-md" dense>
        <q-toolbar-title
          class="text-weight-bold"
          :class="{
            'text-white': $q.dark.mode,
            'text-dark': !$q.dark.mode,
          }"
        >
          Add Tips
        </q-toolbar-title>
        <q-space></q-space>
        <q-btn
          @click="show_modal = !true"
          color="white"
          square
          unelevated
          text-color="grey"
          icon="las la-times"
          dense
          no-caps
          size="sm"
          class="border-grey radius8"
        />
      </q-toolbar>
      <q-form @submit="onApplyTips">
        <q-card-section>
          <q-input
            v-model="manual_tip"
            label="Enter amount"
            outlined
            lazy-rules
            :bg-color="$q.dark.mode ? 'grey600' : 'input'"
            :label-color="$q.dark.mode ? 'grey300' : 'grey'"
            borderless
            class="input-borderless"
            type="number"
            :rules="[
              (val) => (val && val.length > 0) || 'Please enter valid amount',
            ]"
          />

          <q-btn
            type="submit"
            label="Save"
            :loading="loading"
            unelevated
            color="primary"
            text-color="white"
            no-caps
            class="full-width"
            size="lg"
          />
        </q-card-section>
      </q-form>
    </q-card>
  </q-dialog>
</template>

<script>
import APIinterface from "src/api/APIinterface";

export default {
  props: ["tips_data", "tips_value"],
  name: "TipsList",
  data() {
    return {
      tips: 0,
      show_modal: false,
      loading: false,
      manual_tip: 0,
    };
  },
  created() {
    console.log(this.tips_value);
    if (this.tips_value) {
      this.tips = this.tips_value.tips;
    }
  },
  watch: {
    tips_value(newval, oldval) {
      this.tips = this.tips_value.tips;
    },
  },
  methods: {
    onApplyTips() {
      this.tips = this.manual_tip;
      this.checkoutAddTips();
    },
    updateTips() {
      if (this.tips === "fixed") {
        this.show_modal = true;
      } else {
        this.show_modal = false;
        this.checkoutAddTips();
      }
    },
    checkoutAddTips() {
      this.loading = true;
      APIinterface.checkoutAddTips({
        cart_uuid: APIinterface.getStorage("cart_uuid"),
        value: this.tips,
      })
        .then((data) => {
          this.show_modal = false;
          this.$emit("afterApplytips");
        })
        .catch((error) => {
          APIinterface.notify("grey-8", error, "error", this.$q);
        })
        .then((data) => {
          this.loading = false;
        });
    },
  },
};
</script>
