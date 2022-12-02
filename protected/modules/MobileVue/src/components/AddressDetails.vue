<template>
  <q-dialog
    v-model="show_modal"
    persistent
    @before-show="beforeShow"
    :maximized="true"
    transition-show="fade"
    transition-hide="fade"
  >
    <q-card class="row items-stretch">
      <div class="col-12">
        <q-toolbar v-if="!adjust_pin">
          <q-btn
            icon="close"
            flat
            round
            dense
            v-close-popup
            :color="$q.dark.mode ? 'white' : 'dark'"
          />
          <q-toolbar-title
            class="text-weight-bold"
            :class="{
              'text-white': $q.dark.mode,
              'text-dark': !$q.dark.mode,
            }"
          >
            Delivery Address
          </q-toolbar-title>
        </q-toolbar>

        <div :class="{ 'q-pl-md q-pr-md': !adjust_pin, 'fit ': adjust_pin }">
          <template v-if="!adjust_pin">
            <q-form @submit="onSubmit">
              <GoogleMap
                ref="mapRef"
                class="map bg-grey-2 radius8 q-mb-md"
                :api-key="maps_config.key"
                :center="center"
                :zoom="maps_config.zoom"
                :disable-default-ui="true"
                @center_changed="centerChanged"
                @dragend="dragEnd"
                :styles="
                  $q.dark.mode
                    ? MapStore.map_style_dark
                    : MapStore.map_style_light
                "
              >
                <Marker :options="{ position: marker_position, label: icon }" />
                <template v-if="adjust_pin">
                  <Circle
                    v-for="circle in circles"
                    :key="circle.center"
                    :options="circle"
                  />
                </template>
              </GoogleMap>

              <div class="row items-center items-stretch">
                <div class="col-9">
                  <div class="text-weight-bold">
                    {{ location_data.address.address1 }}
                  </div>
                  <div class="cursor-pointer font12 text-grey">
                    {{ location_data.address.formatted_address }}
                    <q-icon name="eva-edit-outline" />
                    <q-popup-edit
                      v-model="location_data.address.formatted_address"
                      auto-save
                      v-slot="scope"
                    >
                      <q-input
                        v-model="scope.value"
                        dense
                        autofocus
                        counter
                        @keyup.enter="scope.set"
                      />
                    </q-popup-edit>
                  </div>
                </div>
                <div class="col-3">
                  <q-btn
                    @click="adjust_pin = !adjust_pin"
                    unelevated
                    :color="$q.dark.mode ? 'grey600' : 'mygrey'"
                    :text-color="$q.dark.mode ? 'grey300' : 'dark'"
                    icon="las la-map-marker"
                    no-caps
                    class="line-normal fit"
                  />
                </div>
              </div>

              <q-space class="q-pa-sm"></q-space>

              <div class="q-gutter-sm">
                <q-input
                  v-model="location_name"
                  label="Aparment, suite or floor"
                  outlined
                  lazy-rules
                  :bg-color="$q.dark.mode ? 'grey600' : 'input'"
                  :label-color="$q.dark.mode ? 'grey300' : 'grey'"
                  borderless
                  class="input-borderless"
                />

                <q-select
                  v-model="delivery_options"
                  :options="delivery_options_data"
                  transition-show="fade"
                  transition-hide="fade"
                  emit-value
                  outlined
                  lazy-rules
                  :bg-color="$q.dark.mode ? 'grey600' : 'input'"
                  :label-color="$q.dark.mode ? 'grey300' : 'grey'"
                  borderless
                  class="input-borderless"
                />

                <q-input
                  v-model="delivery_instructions"
                  autogrow
                  label="Add delivery instructions"
                  outlined
                  lazy-rules
                  :bg-color="$q.dark.mode ? 'grey600' : 'input'"
                  :label-color="$q.dark.mode ? 'grey300' : 'grey'"
                  borderless
                  class="input-borderless"
                />

                <div class="text-h6">Address label</div>

                <q-btn-toggle
                  v-model="address_label"
                  toggle-color="secondary"
                  :color="$q.dark.mode ? 'grey600' : 'mygrey'"
                  :text-color="$q.dark.mode ? 'grey300' : 'dark'"
                  no-caps
                  no-wrap
                  unelevated
                  :options="address_label_data"
                  class="rounded-group2 text-weight-bold line-1"
                />
                <q-space class="q-pa-xl"></q-space>
                <q-footer class="q-pl-md q-pr-md q-pt-sm q-pb-sm bg-white">
                  <q-btn
                    type="submit"
                    :loading="loading"
                    label="Save Address"
                    unelevated
                    no-caps
                    color="primary text-white"
                    class="full-width text-weight-bold"
                    size="lg"
                  />
                </q-footer>
              </div>
            </q-form>
          </template>
          <!-- end form -->

          <template v-else>
            <div class="fit relative-position">
              <div
                class="absolute-top-left full-width z-top"
                :class="{
                  'bg-dark': $q.dark.mode,
                  'bg-white': !$q.dark.mode,
                }"
              >
                <q-toolbar>
                  <q-btn
                    icon="eva-close-outline"
                    flat
                    round
                    dense
                    v-close-popup
                    :color="$q.dark.mode ? 'white' : 'dark'"
                  />
                  <q-toolbar-title
                    class="text-weight-bold"
                    :class="{
                      'text-white': $q.dark.mode,
                      'text-dark': !$q.dark.mode,
                    }"
                  >
                    Delivery Address
                  </q-toolbar-title>
                </q-toolbar>
              </div>
              <GoogleMap
                ref="mapRef"
                class="fit"
                :api-key="maps_config.key"
                :center="center"
                :zoom="maps_config.zoom"
                :disable-default-ui="true"
                @center_changed="centerChanged"
                @dragend="dragEnd"
                :styles="
                  $q.dark.mode
                    ? MapStore.map_style_dark
                    : MapStore.map_style_light
                "
              >
                <Marker :options="{ position: marker_position, label: icon }" />
                <template v-if="adjust_pin">
                  <Circle
                    v-for="circle in circles"
                    :key="circle.center"
                    :options="circle"
                  />
                </template>
              </GoogleMap>
            </div>

            <q-footer class="q-pl-md q-pr-md q-pt-sm q-pb-sm bg-white">
              <q-btn
                label="Save"
                :loading="loading"
                @click="validateCoordinates"
                unelevated
                no-caps
                color="primary text-white"
                class="full-width text-weight-bold"
                size="lg"
              />
            </q-footer>
          </template>
        </div>
      </div>
      <!-- col-12 -->
    </q-card>
  </q-dialog>
</template>

<script>
import { defineAsyncComponent } from "vue";
import { GoogleMap, Marker, Circle } from "vue3-google-map";
import APIinterface from "src/api/APIinterface";
import { useMapStore } from "stores/MapStore";

export default {
  name: "AddressDetails",
  props: ["maps_config"],
  components: {
    GoogleMap,
    Marker,
    Circle,
  },
  setup() {
    const MapStore = useMapStore();
    return {
      MapStore,
    };
  },
  data() {
    return {
      show_modal: false,
      loading: false,
      location_data: [],
      location_name: "",
      delivery_options: "",
      delivery_instructions: "",
      address_label: "Home",
      attributes: [],
      delivery_options_data: [],
      address_label_data: [],
      formatted_address: "",
      adjust_pin: false,
      class_map: "map bg-grey-2 rounded-10 q-mb-md",
      marker: [],
      validat_coord: false,
      new_lat: "",
      new_lng: "",
      center: [],
      marker_position: [],
      icon: {
        text: "\uea44",
        fontFamily: "Material Icons",
        color: "#ffffff",
        fontSize: "18px",
      },
      circles: {},
    };
  },
  mounted() {
    this.addressAtttibues();
  },
  watch: {
    adjust_pin(newval, oldval) {
      if (newval) {
        this.class_map = "window-height full-width";
      } else {
        this.class_map = "map bg-grey-2 rounded-10 q-mb-md";
      }
    },
  },
  methods: {
    beforeShow() {
      this.adjust_pin = false;
    },
    showModal() {
      this.show_modal = true;
      const locations = {
        lat: parseFloat(this.location_data.latitude),
        lng: parseFloat(this.location_data.longitude),
      };
      this.marker_position = locations;
      this.center = locations;
      this.new_lat = parseFloat(this.location_data.latitude);
      this.new_lng = parseFloat(this.location_data.longitude);

      if (this.location_data.attributes) {
        this.location_name = this.location_data.attributes.location_name;
        this.delivery_options = this.location_data.attributes.delivery_options;
        this.delivery_instructions =
          this.location_data.attributes.delivery_instructions;
        this.address_label = this.location_data.attributes.address_label;
      }

      this.circles.location = {
        center: locations,
        radius: 250,
        strokeColor: "#f5b358",
        strokeOpacity: 0.1,
        strokeWeight: 2,
        fillColor: "#f5b358",
        fillOpacity: 0.35,
      };
    },
    closeModal() {
      this.show_modal = false;
      this.adjust_pin = false;
    },
    addressAtttibues() {
      APIinterface.addressAtttibues()
        .then((data) => {
          this.attributes = data.details;

          if (Object.keys(data.details.delivery_option).length > 0) {
            Object.entries(data.details.delivery_option).forEach(
              ([key, items]) => {
                this.delivery_options_data.push({ label: items, value: key });
              }
            );
          }

          if (Object.keys(data.details.address_label).length > 0) {
            Object.entries(data.details.address_label).forEach(
              ([key, items]) => {
                this.address_label_data.push({ label: items, value: key });
              }
            );
          }
        })
        .catch((error) => {
          APIinterface.notify("dark", error, "error", this.$q);
        })
        .then((data) => {});
    },
    centerChanged() {
      if (this.adjust_pin) {
        const gmap = this.$refs.mapRef.map;
        const center = gmap.getCenter();
        this.marker_position = { lat: center.lat(), lng: center.lng() };
        this.new_lat = center.lat();
        this.new_lng = center.lng();
      }
    },
    validateCoordinates() {
      const $params = {
        lat: parseFloat(this.location_data.latitude),
        lng: parseFloat(this.location_data.longitude),
        new_lat: this.new_lat,
        new_lng: this.new_lng,
      };
      this.loading = true;
      APIinterface.validateCoordinates($params)
        .then((data) => {
          this.adjust_pin = false;
          this.location_data.latitude = this.new_lat;
          this.location_data.longitude = this.new_lng;
        })
        .catch((error) => {
          APIinterface.notify("dark", error, "error", this.$q);
        })
        .then((data) => {
          this.loading = false;
        });
    },
    onSubmit() {
      console.debug("onSubmit");
      this.loading = true;
      const $params = {
        delivery_instructions: this.delivery_instructions,
        delivery_options: this.delivery_options,
        formatted_address: this.location_data.address.formatted_address,
        location_name: this.location_name,
        address_label: this.address_label,
        data: this.location_data,
      };
      APIinterface.saveClientAddress($params)
        .then((data) => {
          this.closeModal();
          APIinterface.setStorage("place_id", data.details.place_id);
          this.$emit("afterSaveaddress");
        })
        .catch((error) => {
          APIinterface.notify("dark", error, "error", this.$q);
        })
        .then((data) => {
          this.loading = false;
        });
    },
  },
};
</script>
