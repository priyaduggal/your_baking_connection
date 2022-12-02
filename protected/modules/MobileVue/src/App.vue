<template>
  <router-view />
</template>

<script>
import { FCM } from "@capacitor-community/fcm";
import { PushNotifications } from "@capacitor/push-notifications";
// import { Device } from '@capacitor/device'
import { defineComponent } from "vue";
import APIinterface from "./api/APIinterface";
import config from "./api/config";
import { usePushStore } from "stores/PushStore";
import auth from "./api/auth";
import { useDataStore } from "stores/DataStore";
import { useDataStorePersisted } from "stores/DataStorePersisted";
import { App } from "@capacitor/app";
import { Network } from "@capacitor/network";
//import { useQuasar } from "quasar";

export default defineComponent({
  name: "App",
  data() {
    return {
      token: "",
      close_count: 0,
    };
  },
  setup() {
    const PushStore = usePushStore();
    const DataStore = useDataStore();
    const DataStorePersisted = useDataStorePersisted();

    // const $q = useQuasar();
    // $q.addressbarColor.set("#ff724c");

    return { PushStore, DataStore, DataStorePersisted };
  },
  created() {
    this.$q.dark.set(this.DataStorePersisted.dark_mode);

    if (this.$q.capacitor) {
      this.initPush();
    }
    this.verifyToken();
    if (!this.DataStore.hadPrefix()) {
      this.DataStore.getAttributes();
    }

    this.close_count = 0;

    App.addListener("backButton", (data) => {
      this.close_count++;
      if (!data.canGoBack) {
        if (this.close_count >= 2) {
          this.closeApp();
        } else {
          APIinterface.showToast("Press BACK again to exit");
          setTimeout(() => {
            this.close_count = 0;
          }, 1000);
        }
      }
    });

    if (this.$q.capacitor) {
      this.checkNetwork();
      Network.addListener("networkStatusChange", (status) => {
        if (status.connected === false) {
          APIinterface.showToast("No internet connection");
          this.$router.push("/errornetwork");
        }
      });
    }
  },
  methods: {
    async checkNetwork() {
      const status = await Network.getStatus();
      if (status.connected === false) {
        this.$router.push("/errornetwork");
      }
    },
    closeApp() {
      App.exitApp();
    },
    verifyToken() {
      auth
        .authenticate()
        .then((data) => {
          //
        })
        // eslint-disable-next-line
        .catch((error) => {
          auth.logout();
        })
        .then((data) => {});
    },
    initPush() {
      PushNotifications.requestPermissions().then((result) => {
        if (result.receive === "granted") {
          PushNotifications.register();
        } else {
          APIinterface.notify(
            "negative",
            "Error on push permission",
            "warning",
            this.$q
          );
        }
      });

      FCM.setAutoInit({ enabled: true }).then(() => {
        //
      });

      FCM.isAutoInitEnabled().then((r) => {
        // alert('Auto init is ' + (r.enabled ? 'enabled' : 'disabled'))
      });

      FCM.subscribeTo({ topic: config.topic })
        .then((r) => {
          //
        })
        .catch((error) => {
          APIinterface.notify(
            "red-5",
            "Error subscribing topics" + JSON.stringify(error),
            "warning",
            this.$q
          );
        });

      PushNotifications.addListener("registration", (Token) => {
        if (this.$q.platform.is.android) {
          this.token = Token.value;
          APIinterface.setSession("device_token", this.token);
        } else {
          FCM.getToken()
            .then((r) => {
              this.token = r.token;
              APIinterface.setSession("device_token", this.token);
            })
            .catch((error) => {
              APIinterface.notify("red-5", error, "error_outline", this.$q);
            });
        }
      });

      PushNotifications.addListener("registrationError", (error) => {
        APIinterface.notify(
          "red-5",
          "Error on registration" + JSON.stringify(error),
          "warning",
          this.$q
        );
      });

      PushNotifications.createChannel({
        description: "KMRS mobile app channel",
        id: config.channel,
        importance: 5,
        lights: true,
        name: "kmrs channel",
        sound: config.sound,
        vibration: true,
        visibility: 1,
      })
        .then(() => {
          // alert('push channel created: ')
        })
        .catch((error) => {
          APIinterface.notify(
            "red-5",
            "Error on registration" + JSON.stringify(error),
            "warning",
            this.$q
          );
        });

      PushNotifications.addListener(
        "pushNotificationReceived",
        (notification) => {
          // alert('Push received: ' + JSON.stringify(notification))
          //this.PushStore.push_modal = true;
          // this.PushStore.ShowModal(true);
          // this.PushStore.push_message = {
          //   title: notification.title,
          //   body: notification.body,
          //   dialog_title: notification.data.dialog_title,
          // };
        }
      );
    },
  },
});
</script>
