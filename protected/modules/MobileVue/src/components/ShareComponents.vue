<template>
  <q-btn
    v-if="this.$q.capacitor"
    round
    @click="share"
    unelevated
    :color="$q.dark.mode ? 'grey600' : 'mygrey'"
    :text-color="$q.dark.mode ? 'grey300' : 'dark'"
    icon="las la-share-square"
    dense
    size="sm"
    class="q-ml-sm"
  />
  <q-btn
    v-else
    round
    unelevated
    :color="$q.dark.mode ? 'grey600' : 'mygrey'"
    :text-color="$q.dark.mode ? 'grey300' : 'dark'"
    icon="las la-share-square"
    dense
    size="sm"
    class="q-ml-sm"
  />
</template>

<script>
import { Share } from "@capacitor/share";

export default {
  name: "ShareComponents",
  props: ["title", "text", "url", "dialogTitle"],
  methods: {
    share() {
      Share.share({
        title: this.title,
        text: this.text,
        url: this.url,
        dialogTitle: this.dialogTitle,
      })
        .then((data) => {
          //
        })
        .catch((error) => {
          //APIinterface.notify("dark", error, "error", this.$q);
        });
    },
  },
};
</script>
