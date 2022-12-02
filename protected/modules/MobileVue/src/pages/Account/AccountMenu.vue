<template>
  <q-header
    reveal
    reveal-offset="50"
    :class="{
      'bg-transparent text-white': $q.dark.mode,
      'bg-grey-1 text-dark': !$q.dark.mode,
    }"
  >
    <q-toolbar>
      <q-btn
        to="/home"
        flat
        round
        dense
        icon="las la-angle-left"
        class="q-mr-sm"
        :text-color="$q.dark.mode ? 'white' : 'dark'"
      />
      <q-toolbar-title class="text-weight-bold">Profile</q-toolbar-title>
      <NotiButton></NotiButton>
    </q-toolbar>
  </q-header>
  <q-page
    padding
    class="q-pa-md"
    :class="{ 'bg-transparent': $q.dark.mode, 'bg-grey-1': !$q.dark.mode }"
  >
    <div class="row items-center">
      <div class="col-3">
        <q-avatar>
          <q-img
            :src="data.avatar"
            lazy
            style="height: 50px; max-width: 50px"
            spinner-color="secondary"
            spinner-size="20px"
          />
        </q-avatar>
      </div>
      <div class="col">
        <h5 class="text-weight-bold q-ma-none">
          {{ data.first_name }} {{ data.last_name }}
        </h5>
        <p class="text-weight-medium q-ma-none">
          {{ data.email_address }}
        </p>
      </div>
    </div>
    <!-- rows -->

    <q-space class="q-pa-sm"></q-space>

    <q-card
      flat
      class="radius8"
      :class="{ 'bg-grey500': $q.dark.mode, 'bg-white': !$q.dark.mode }"
    >
      <q-card-section>
        <div class="row items-center q-gutter-sm">
          <div class="col text-center">
            <q-btn
              to="/account/allorder"
              round
              color="secondary"
              icon="las la-truck"
              dense
              flat
            />
            <q-btn
              to="/account/allorder"
              flat
              no-caps
              label="My All orders"
              class="line-height-one q-pa-none"
              :text-color="$q.dark.mode ? 'bluegrey500' : 'dark'"
            ></q-btn>
          </div>
          <div class="col text-center">
            <q-btn
              :to="{
                path: 'feed',
                query: {
                  query: 'promo',
                  page_title: 'Promo',
                },
              }"
              round
              color="primary"
              icon="las la-percentage"
              dense
              flat
            />
            <q-btn
              flat
              no-caps
              label="Offers & Coupons"
              class="line-height-one q-pa-none"
              :to="{
                path: 'feed',
                query: {
                  query: 'promo',
                  page_title: 'Promo',
                },
              }"
              :text-color="$q.dark.mode ? 'bluegrey500' : 'dark'"
            ></q-btn>
          </div>
          <div class="col text-center">
            <q-btn
              round
              color="yellow-5"
              icon="las la-map-marker"
              dense
              flat
              to="/account/my-address"
            />
            <q-btn
              to="/account/my-address"
              flat
              no-caps
              label="Your Addresses"
              class="line-height-one q-pa-none"
              :text-color="$q.dark.mode ? 'bluegrey500' : 'dark'"
            ></q-btn>
          </div>
        </div>
        <!-- row -->
      </q-card-section>
    </q-card>

    <q-space class="q-pa-sm"></q-space>

    <q-card
      flat
      class="radius8"
      :class="{ 'bg-transparent': $q.dark.mode, 'bg-grey-1': !$q.dark.mode }"
    >
      <q-list class="modified-qlist">
        <q-item clickable v-ripple to="/account/edit-profile">
          <q-item-section avatar>
            <q-icon color="grey-5" name="las la-user-alt" />
          </q-item-section>
          <q-item-section>Manage Profile</q-item-section>
          <q-item-section side>
            <q-btn
              round
              unelevated
              text-color="dark"
              icon="las la-angle-right"
              dense
              class="text-grey-5 font13"
            />
          </q-item-section>
        </q-item>

        <q-item clickable v-ripple to="/account/change-password">
          <q-item-section avatar>
            <q-icon color="grey-5" name="las la-lock" />
          </q-item-section>
          <q-item-section>Change Password</q-item-section>
          <q-item-section side>
            <q-btn
              round
              unelevated
              text-color="dark"
              icon="las la-angle-right"
              dense
              class="text-grey-5 font13"
            />
          </q-item-section>
        </q-item>

        <q-item clickable v-ripple to="/account/payments">
          <q-item-section avatar>
            <q-icon color="grey-5" name="las la-credit-card" />
          </q-item-section>
          <q-item-section>Payment</q-item-section>
          <q-item-section side>
            <q-btn
              round
              unelevated
              text-color="dark"
              icon="las la-angle-right"
              dense
              class="text-grey-5 font13"
            />
          </q-item-section>
        </q-item>

        <q-item clickable v-ripple to="/account/favourites">
          <q-item-section avatar>
            <q-icon color="grey-5" name="lab la-gratipay" />
          </q-item-section>
          <q-item-section>Favourites</q-item-section>
          <q-item-section side>
            <q-btn
              round
              unelevated
              text-color="dark"
              icon="las la-angle-right"
              dense
              class="text-grey-5 font13"
            />
          </q-item-section>
        </q-item>

        <q-item clickable v-ripple>
          <q-item-section avatar>
            <q-icon color="grey-5" name="las la-bell" />
          </q-item-section>
          <q-item-section>Push Notifications</q-item-section>
          <q-item-section side>
            <q-toggle
              v-model="app_push_notifications"
              color="secondary"
              @update:model-value="Updateaccountnotification"
            />
          </q-item-section>
        </q-item>

        <q-item clickable v-ripple>
          <q-item-section avatar>
            <q-icon color="grey-5" name="las la-bell" />
          </q-item-section>
          <q-item-section>Promotional Notifications</q-item-section>
          <q-item-section side>
            <q-toggle
              v-model="promotional_push_notifications"
              color="secondary"
              @update:model-value="Updateaccountpromonotification"
            />
          </q-item-section>
        </q-item>

        <q-item clickable v-ripple to="/account/language">
          <q-item-section avatar>
            <q-icon color="grey-5" name="las la-credit-card" />
          </q-item-section>
          <q-item-section>Language</q-item-section>
          <q-item-section side v-if="DataStore.language_data">
            <template v-for="lang in DataStore.language_data.data" :key="lang">
              <q-btn
                v-if="lang.code == this.DataStorePersisted.app_language"
                no-caps
                :label="lang.title"
                unelevated
                text-color="dark"
                icon-right="las la-angle-right"
                dense
                class="text-grey-5 font13"
              />
            </template>
          </q-item-section>
        </q-item>

        <q-item clickable v-ripple>
          <q-item-section avatar>
            <q-icon color="grey-5" name="las la-adjust" />
          </q-item-section>
          <q-item-section>Dark Mode</q-item-section>
          <q-item-section side>
            <q-toggle v-model="theme_mode" color="secondary" />
          </q-item-section>
        </q-item>

        <!-- <q-item clickable v-ripple>
          <q-item-section avatar>
            <q-icon color="grey-5" name="las la-cog" />
          </q-item-section>
          <q-item-section>Settings</q-item-section>
          <q-item-section side>
            <q-btn
              round
              unelevated
              text-color="dark"
              icon="las la-angle-right"
              dense
              class="text-grey-5 font13"
            />
          </q-item-section>
        </q-item> -->

        <q-item clickable v-ripple to="/account/delete">
          <q-item-section avatar>
            <q-icon color="grey-5" name="las la-user-slash" />
          </q-item-section>
          <q-item-section>Delete Account</q-item-section>
          <q-item-section side>
            <q-btn
              round
              unelevated
              text-color="dark"
              icon="las la-angle-right"
              dense
              class="text-grey-5 font13"
            />
          </q-item-section>
        </q-item>

        <q-item clickable v-ripple @click="inviteFriends">
          <q-item-section avatar>
            <q-icon color="grey-5" name="las la-user-friends" />
          </q-item-section>
          <q-item-section>Invite Friends</q-item-section>
          <q-item-section side>
            <q-btn
              round
              unelevated
              text-color="dark"
              icon="las la-angle-right"
              dense
              class="text-grey-5 font13"
            />
          </q-item-section>
        </q-item>

        <q-item to="/legal" clickable v-ripple>
          <q-item-section avatar>
            <q-icon color="grey-5" name="las la-balance-scale" />
          </q-item-section>
          <q-item-section>Legal</q-item-section>
          <q-item-section side>
            <q-btn
              round
              unelevated
              text-color="dark"
              icon="las la-angle-right"
              dense
              class="text-grey-5 font13"
            />
          </q-item-section>
        </q-item>

        <!-- <q-item clickable v-ripple>
          <q-item-section avatar>
            <q-icon color="grey-5" name="las la-question-circle" />
          </q-item-section>
          <q-item-section>Support</q-item-section>
          <q-item-section side>
            <q-btn
              round
              unelevated
              text-color="dark"
              icon="las la-angle-right"
              dense
              class="text-grey-5 font13"
            />
          </q-item-section>
        </q-item> -->

        <q-item clickable v-ripple @click="logout">
          <q-item-section avatar>
            <q-icon color="secondary" name="las la-sign-out-alt" />
          </q-item-section>
          <q-item-section>Logout</q-item-section>
          <q-item-section side>
            <q-btn
              round
              unelevated
              text-color="dark"
              icon="las la-angle-right"
              dense
              class="text-grey-5 font13"
            />
          </q-item-section>
        </q-item>
      </q-list>
    </q-card>
  </q-page>
</template>

<script>
import { defineComponent, defineAsyncComponent } from "vue";
import auth from "src/api/auth";
import APIinterface from "src/api/APIinterface";
import { useDataStore } from "stores/DataStore";
import { useDataStorePersisted } from "stores/DataStorePersisted";
import { useClientStore } from "stores/ClientStore";
import { Share } from "@capacitor/share";

export default {
  name: "AccountMenu",
  components: {
    NotiButton: defineAsyncComponent(() => import("components/NotiButton.vue")),
  },
  data() {
    return {
      data: [],
      theme_mode: false,
      app_push_notifications: false,
      promotional_push_notifications: false,
      user_settings: {},
    };
  },
  setup() {
    const DataStore = useDataStore();
    const DataStorePersisted = useDataStorePersisted();
    const ClientStore = useClientStore();
    return { DataStore, DataStorePersisted, ClientStore };
  },
  watch: {
    theme_mode(newval, oldval) {
      this.$q.dark.set(newval);
      this.DataStorePersisted.dark_mode = newval;
    },
  },
  created() {
    this.data = auth.getUser();
    this.authenticate();

    this.theme_mode = this.DataStorePersisted.dark_mode;
    this.$q.dark.set(this.theme_mode);

    this.app_push_notifications =
      this.ClientStore.user_settings.app_push_notifications == 1 ? true : false;
    this.promotional_push_notifications =
      this.ClientStore.user_settings.promotional_push_notifications == 1
        ? true
        : false;
  },
  methods: {
    authenticate() {
      auth
        .authenticate()
        .then((data) => {
          //
        })
        .catch((error) => {
          APIinterface.notify("dark", error, "error", this.$q);
          auth.logout();
          this.$router.push("/user/login");
        })
        .then((data) => {});
    },
    logout() {
      this.$q
        .dialog({
          title: "Logout",
          message: "Are you sure you want to logout?",
          persistent: true,
          position: "standard",
          transitionShow: "fade",
          transitionHide: "fade",
          ok: {
            unelevated: true,
            color: "primary",
            rounded: false,
            "text-color": "white",
            size: "md",
            label: "Yes",
            "no-caps": true,
          },
          cancel: {
            unelevated: true,
            rounded: false,
            color: "grey-3",
            "text-color": "black",
            size: "md",
            label: "Cancel",
            "no-caps": true,
          },
        })
        .onOk(() => {
          auth.logout();
          this.ClientStore.user_settings = [];
          this.$router.push("/home");
        })
        .onOk(() => {
          // console.log('>>>> second OK catcher')
        })
        .onCancel(() => {
          // console.log('>>>> Cancel')
        })
        .onDismiss(() => {
          // console.log('I am triggered on both OK and Cancel')
        });
    },
    Updateaccountnotification() {
      APIinterface.fetchDataByTokenPost(
        "Updateaccountnotification",
        "app_push_notifications=" + this.app_push_notifications
      )
        .then((data) => {
          this.ClientStore.user_settings.app_push_notifications =
            data.details.app_push_notifications;
        })
        .catch((error) => {})
        .then((data) => {});
    },
    Updateaccountpromonotification() {
      APIinterface.fetchDataByTokenPost(
        "Updateaccountpromonotification",
        "promotional_push_notifications=" + this.promotional_push_notifications
      )
        .then((data) => {
          this.ClientStore.user_settings.promotional_push_notifications =
            data.details.promotional_push_notifications;
        })
        .catch((error) => {})
        .then((data) => {});
    },
    inviteFriends() {
      if (this.$q.capacitor) {
        Share.share({
          title: this.DataStore.invite_friend_settings.title,
          text: this.DataStore.invite_friend_settings.text,
          url: this.DataStore.invite_friend_settings.url,
          dialogTitle: "",
        })
          .then((data) => {
            //
          })
          .catch((error) => {
            //APIinterface.notify("dark", error, "error", this.$q);
          });
      } else {
        if (navigator.share) {
          navigator
            .share({
              title: this.DataStore.invite_friend_settings.title,
              text: this.DataStore.invite_friend_settings.text,
              url: this.DataStore.invite_friend_settings.url,
            })
            .then(() => console.log("Successful share"))
            .catch((error) => console.log("Error sharing", error));
        } else {
          if (this.$q.capacitor) {
            APIinterface.showToast("Share not supported");
          } else {
            APIinterface.notify(
              "dark",
              "Share not supported",
              "error",
              this.$q
            );
          }
        }
      }
    },
  },
};
</script>
