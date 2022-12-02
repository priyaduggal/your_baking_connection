<template>
  <q-header
    :class="{
      'bg-mydark text-white': $q.dark.mode,
      'bg-white text-dark': !$q.dark.mode,
    }"
  >
    <q-toolbar>
      <q-btn
        @click="$router.back()"
        flat
        round
        dense
        icon="las la-angle-left"
        class="q-mr-sm"
        :color="$q.dark.mode ? 'white' : 'dark'"
      />
      <q-toolbar-title class="text-weight-bold">Add Address</q-toolbar-title>
    </q-toolbar>
  </q-header>
  <q-page class="bg-grey-1 row items-stretch">
    <div class="col-12 relative-position">
      <div
        class="z-top q-pl-md q-pr-md q-pb-sm row items-center justify-between"
        :class="{
          'bg-mydark': $q.dark.mode,
          'bg-white': !$q.dark.mode,
        }"
      >
        <q-input
          v-model="address_search"
          @click="modal = !modal"
          label="Enter your location"
          outlined
          lazy-rules
          :bg-color="$q.dark.mode ? 'grey600' : 'input'"
          :label-color="$q.dark.mode ? 'grey300' : 'grey'"
          borderless
          class="input-borderless cursor-pointer"
          :class="{ fit: !address_search }"
          readonly
        >
          <template v-slot:prepend>
            <q-icon name="eva-search-outline" size="sm" />
          </template>
        </q-input>
        <q-btn
          v-if="address_search"
          @click="address_search = ''"
          no-caps
          icon="las la-times"
          dense
          unelevated
        ></q-btn>
      </div>

      <div class="absolute-top-right z-top" style="top: 80px; right: 15px">
        <q-btn
          @click="locationPermission"
          round
          color="secondary"
          icon="gps_fixed"
          unelevated
        />
      </div>

      <GoogleMap
        v-if="DataStore.maps_config"
        ref="mapRef"
        class="fit"
        :api-key="maps_config.key"
        :center="center"
        :zoom="maps_config.zoom"
        :disable-default-ui="true"
        @center_changed="centerChanged"
        @dragend="dragEnd"
        :styles="
          $q.dark.mode ? MapStore.map_style_dark : MapStore.map_style_light
        "
      >
        <template v-if="marker_position">
          <Marker :options="{ position: marker_position, label: icon }" />
        </template>
      </GoogleMap>
    </div>

    <q-inner-loading :showing="geocoder_loading" size="md" color="primary" />

    <q-footer
      reveal
      class="bg-whitex q-pl-md q-pr-md q-pb-lg q-pt-md text-dark"
      style="border-top-right-radius: 15px; border-top-left-radius: 15px"
      :class="{
        'bg-white': !loading,
        'bg-grey-1': loading,
      }"
    >
      <template v-if="!loading">
        <div
          class="row items-center q-mb-md no-wrap"
          :class="{
            'text-white': $q.dark.mode,
            'text-dark': !$q.dark.mode,
          }"
        >
          <div class="q-pr-sm">
            <q-icon name="las la-map-marker" size="md" />
          </div>
          <div class="font13 col-10">
            <template v-if="!hasAddress">
              {{ address }}
            </template>
            <template v-else> Location is not available </template>
          </div>
        </div>

        <q-btn
          label="Confirm Location"
          @click="setLocation"
          :disable="hasAddress || geocoder_loading"
          :loading="loading"
          unelevated
          no-caps
          :color="geocoder_loading == true ? 'grey' : 'primary'"
          text-color="white"
          class="full-width text-weight-medium radius28"
          size="lg"
        />
      </template>
      <template v-else>
        <div class="q-pa-lg">&nbsp;</div>
      </template>
    </q-footer>
  </q-page>

  <q-dialog
    v-model="modal"
    position="top"
    transition-show="fade"
    transition-hide="fade"
    @show="addressFocus()"
  >
    <q-card
      class="no-shadow q-pt-md q-pb-sm"
      :class="{ 'bg-mydark': $q.dark.mode, 'bg-white': !$q.dark.mode }"
    >
      <q-card-section>
        <SearchAddress
          ref="search_address"
          @after-selectaddress="afterSelectaddress"
          placeholder="Enter your location"
        />
      </q-card-section>
    </q-card>
  </q-dialog>

  <DeliverySched ref="delivery_sched" @after-savetrans="afterSavetrans" />
</template>

<script>
import { defineAsyncComponent } from "vue";
import { GoogleMap, Marker } from "vue3-google-map";
import APIinterface from "src/api/APIinterface";
import auth from "src/api/auth";
import { useDataStore } from "stores/DataStore";
import { useClientStore } from "stores/ClientStore";
import { useMapStore } from "stores/MapStore";
import AppLocation from "src/api/AppLocation";

export default {
  name: "MapPage",
  components: {
    GoogleMap,
    Marker,
    SearchAddress: defineAsyncComponent(() =>
      import("components/SearchAddress.vue")
    ),
    DeliverySched: defineAsyncComponent(() =>
      import("components/DeliverySched.vue")
    ),
  },
  setup() {
    const DataStore = useDataStore();
    const ClientStore = useClientStore();
    const MapStore = useMapStore();
    return { DataStore, ClientStore, MapStore };
  },
  data() {
    return {
      address: "",
      address_search: "",
      modal: false,
      geocoder_loading: true,
      center: { lat: 34.04703, lng: -118.24686 },
      data: [],
      marker_position: {},
      default_icon: {
        text: "\uea44",
        fontFamily: "Material Icons",
        color: "#ffffff",
        fontSize: "18px",
      },
      icon: {},
      back_url: "",
      loading: true,
      maps_config: [],
    };
  },
  created() {
    this.back_url = this.$route.query.url;
    this.icon = this.default_icon;
  },
  computed: {
    hasAddress() {
      if (APIinterface.empty(this.address)) {
        return true;
      }
      return false;
    },
  },
  watch: {
    DataStore: {
      immediate: true,
      deep: true,
      handler(newValue, oldValue) {
        console.log(newValue.loading);
        if (Object.keys(newValue.maps_config).length > 0) {
          this.maps_config = newValue.maps_config;
          this.marker_position = {
            lat: parseFloat(this.maps_config.default_lat),
            lng: parseFloat(this.maps_config.default_lng),
          };
          this.checkSavedLocation();
        } else if (newValue.loading == false) {
          this.geocoder_loading = false;
        }
      },
    },
  },
  methods: {
    checkSavedLocation() {
      let $data = APIinterface.getStorage("place_data");
      if (!APIinterface.empty($data)) {
        this.geocoder_loading = false;
        this.loading = false;
        this.data = $data;
        this.address_search = $data.address.formatted_address;
        this.address = $data.address.formatted_address;

        this.marker_position = {
          lat: parseFloat(this.data.latitude),
          lng: parseFloat(this.data.longitude),
        };
        this.center = this.marker_position;
      } else {
        this.locationPermission();
      }
    },
    centerChanged() {
      console.log("centerChanged");
      const gmap = this.$refs.mapRef.map;
      const mapCenter = gmap.getCenter();
      const location = new google.maps.LatLng(mapCenter.lat(), mapCenter.lng());
      this.marker_position = { lat: location.lat(), lng: location.lng() };
    },
    dragEnd(data) {
      console.log("dragEnd");
      const gmap = this.$refs.mapRef.map;
      const mapCenter = gmap.getCenter();
      const location = new google.maps.LatLng(mapCenter.lat(), mapCenter.lng());

      this.reverseGeocoding(location.lat(), location.lng());
    },
    addressFocus() {
      this.$refs.search_address.Focus();
    },
    afterSelectaddress(data) {
      this.data = data;
      this.address = data.address.formatted_address;
      this.address_search = data.address.formatted_address;
      this.modal = false;
      this.marker_position = {
        lat: parseFloat(data.latitude),
        lng: parseFloat(data.longitude),
      };
      this.center = {
        lat: parseFloat(data.latitude),
        lng: parseFloat(data.longitude),
      };
      // setTimeout(() => {
      //   this.$refs.address_input.blur();
      // }, 100);
    },
    reverseGeocoding(lat, lng) {
      this.geocoder_loading = true;
      APIinterface.reverseGeocoding(lat, lng)
        .then((data) => {
          this.data = data.details.data;
          if (
            typeof data.details.data.address !== "undefined" &&
            data.details.data.address !== null
          ) {
            this.address = data.details.data.address.formatted_address;

            this.marker_position = {
              lat: lat,
              lng: lng,
            };
            this.center = this.marker_position;
          } else {
            this.address = "";
            this.data = [];
          }
        })
        .catch((error) => {
          APIinterface.notify("dark", error, "error", this.$q);
        })
        .then((data) => {
          this.geocoder_loading = false;
          this.loading = false;
        });
    },
    setLocation() {
      if (APIinterface.empty(this.data.place_id)) {
        APIinterface.notify(
          "dark",
          "Enter your location or select on the map",
          "error",
          this.$q
        );
      }

      APIinterface.setStorage("place_data", this.data);
      APIinterface.setStorage("place_id", this.data.place_id);
      const deliverySched = APIinterface.getStorage("delivery_sched");
      console.debug("deliverySched=>" + deliverySched);

      if (auth.authenticated()) {
        this.geocoder_loading = true;
        APIinterface.SavePlaceByID(this.data.place_id)
          .then((data) => {
            if (APIinterface.empty(deliverySched)) {
              this.$refs.delivery_sched.showSched(true);
            } else {
              this.DataStore.list_data = [];
              this.backPage();
            }
            this.ClientStore.getAddress();
          })
          .catch((error) => {
            APIinterface.notify("dark", error, "error", this.$q);
          })
          .then((data) => {
            this.geocoder_loading = false;
          });
      } else {
        this.geocoder_loading = true;
        if (APIinterface.empty(deliverySched)) {
          this.geocoder_loading = false;
          this.$refs.delivery_sched.showSched(true);
        } else {
          this.DataStore.list_data = [];
          this.backPage();
        }
      }
    },
    backPage() {
      if (!APIinterface.empty(this.back_url)) {
        this.$router.push(this.back_url);
      } else {
        this.$router.push("/home");
      }
    },
    afterSavetrans(data) {
      this.backPage();
    },
    locationPermission() {
      if (this.$q.capacitor) {
        //android
        AppLocation.checkAccuracy()
          .then((data) => {
            this.locateLocation();
          })
          .catch((error) => {
            if (error.code === 4) {
              this.geocoder_loading = false;
              this.reverseGeocoding(
                parseFloat(this.maps_config.default_lat),
                parseFloat(this.maps_config.default_lng)
              );
            } else {
              APIinterface.notify("dark", error.message, "error", this.$q);
            }
          })
          .then((data) => {
            //
          });
      } else {
        //web
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(
            (data) => {
              this.reverseGeocoding(
                data.coords.latitude,
                data.coords.longitude
              );
            },
            (error) => {
              this.reverseGeocoding(
                parseFloat(this.maps_config.default_lat),
                parseFloat(this.maps_config.default_lng)
              );
            }
          );
        }
      }
    },
    locateLocation() {
      AppLocation.getPosition()
        .then((data) => {
          this.reverseGeocoding(data.lat, data.lng);
        })
        .catch((error) => {
          //APIinterface.notify("dark", error, "error", this.$q);
          this.reverseGeocoding(
            parseFloat(this.maps_config.default_lat),
            parseFloat(this.maps_config.default_lng)
          );
        })
        .then((data) => {});
    },
  },
};
</script>
