<template>
  <q-header
    reveal
    reveal-offset="50"
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
      <q-toolbar-title class="text-weight-bold">Sigin In</q-toolbar-title>
    </q-toolbar>
  </q-header>
  <q-page padding class="flex flex-center">
    <div class="full-width q-pa-md">
      <h5 class="text-weight-bold">Let's Sign You In</h5>
      <p class="text-weight-medium q-ma-none">
        Enter your email and password for sigin.
      </p>
      <q-btn
        flat
        label="Don't have an account?"
        no-caps
        class="q-pa-none text-weight-bold min-height q-mb-md"
        color="secondary"
        to="/user/signup"
      />

      <q-form @submit="onSubmit">
        <q-input
          v-model="username"
          label="Email"
          outlined
          lazy-rules
          :bg-color="$q.dark.mode ? 'grey600' : 'input'"
          :label-color="$q.dark.mode ? 'grey300' : 'grey'"
          borderless
          class="input-borderless"
          :rules="[
            (val) => (val && val.length > 0) || 'This field is required',
          ]"
        />

        <q-input
          v-model="password"
          :type="field_type"
          outlined
          :bg-color="$q.dark.mode ? 'grey600' : 'input'"
          :label-color="$q.dark.mode ? 'grey300' : 'grey'"
          borderless
          class="input-borderless"
          label="Password"
          lazy-rules
          :rules="[
            (val) => (val && val.length > 0) || 'This field is required',
          ]"
        >
          <template v-slot:append>
            <q-icon
              @click="
                field_type = field_type == 'password' ? 'text' : 'password'
              "
              :name="FieldIcon"
              color="grey"
              class="cursor-pointer"
            />
          </template>
        </q-input>

        <div class="row">
          <div class="col">
            <q-checkbox
              dense
              v-model="remember"
              label="Remember Me"
              color="primary"
            />
          </div>
          <div class="col text-right">
            <q-btn
              flat
              label="Forgot Password?"
              no-caps
              class="q-pa-none text-weight-bold min-height q-mb-md"
              color="secondary"
              to="/user/forgotpass"
            />
          </div>
        </div>
        <!-- row -->

        <q-btn
          :loading="loading"
          type="submit"
          label="Sign In"
          unelevated
          no-caps
          color="primary text-white"
          class="full-width text-weight-bold"
          size="lg"
        />
        <div class="text-center q-pt-md q-pb-sm">
          <q-btn
            flat
            label="Continue as guest"
            no-caps
            class="q-pa-none text-weight-bold min-height"
            color="secondary"
            to="/home"
            size="md"
          />
        </div>
      </q-form>

      <div class="social-login">
        <div class="relative-position q-mb-lg q-mt-md">
          <q-separator spaced labe />
          <div
            class="absolute-center q-pl-sm q-pr-sm"
            :class="{
              'bg-mydark text-grey300': $q.dark.mode,
              'bg-white text-black': !$q.dark.mode,
            }"
          >
            Or
          </div>
        </div>

        <q-btn
          unelevated
          no-caps
          color="primary"
          class="full-width text-weight-bold"
          size="lg"
          to="/user/login-phone"
        >
          <div class="row justify-between full-width">
            <div class="col text-left text-white">Continue with Phone</div>
            <div class="col-1 text-right text-white">
              <q-icon name="las la-phone" />
            </div>
          </div>
        </q-btn>
        <q-space class="q-pa-sm"></q-space>

        <template v-if="hasSocialLogin">
          <FacebookLogin
            ref="facebook_login"
            :app_id="facebook_app_id"
            @after-login="afterLogin"
          />
          <q-space class="q-pa-sm"></q-space>
          <GoogleLogin
            :client_id="google_client_id"
            ref="google_login"
            @after-login="afterLogin"
          />
        </template>
      </div>
      <!-- social-login -->
    </div>
  </q-page>
</template>

<script>
import { defineAsyncComponent } from "vue";
import APIinterface from "src/api/APIinterface";
import auth from "src/api/auth";
import config from "src/api/config";
import { useClientStore } from "stores/ClientStore";

export default {
  name: "LoginPage",
  data() {
    return {
      username: "",
      password: "",
      field_type: "password",
      loading: false,
      redirect: "",
      google_client_id: "",
      facebook_app_id: "",
      remember: false,
    };
  },
  setup() {
    const ClientStore = useClientStore();
    return { ClientStore };
  },
  components: {
    GoogleLogin: defineAsyncComponent(() =>
      import("components/GoogleLogin.vue")
    ),
    FacebookLogin: defineAsyncComponent(() =>
      import("components/FacebookLogin.vue")
    ),
  },
  mounted() {
    this.redirect = this.$route.query.redirect;
    this.google_client_id = config.google_client_id;
    this.facebook_app_id = config.facebook_app_id;
  },
  computed: {
    FieldIcon() {
      return this.field_type === "password"
        ? "eva-eye-outline"
        : "eva-eye-off-outline";
    },
    hasSocialLogin() {
      if (!APIinterface.empty(this.google_client_id)) {
        return true;
      }
      if (!APIinterface.empty(this.facebook_app_id)) {
        return true;
      }
      return false;
    },
  },
  methods: {
    onSubmit() {
      this.loading = true;
      APIinterface.userLogin({
        username: this.username,
        password: this.password,
        local_id: APIinterface.getStorage("place_id"),
      })
        .then((data) => {
          APIinterface.notify("light-green", data.msg, "check_circle", this.$q);
          auth.setUser(data.details.user_data);
          auth.setToken(data.details.user_token);
          this.ClientStore.user_settings = data.details.user_settings;

          const $placeId = APIinterface.getStorage("place_id");
          if (typeof $placeId !== "undefined" && $placeId !== null) {
            if (
              typeof this.redirect !== "undefined" &&
              this.redirect !== null
            ) {
              this.$router.push(this.redirect);
            } else {
              this.$router.push("/home");
            }
          } else {
            this.$router.push("/location");
          }
        })
        .catch((error) => {
          APIinterface.notify("dark", error, "error", this.$q);
        })
        .then((data) => {
          this.loading = false;
        });
    },
    afterLogin(data) {
      data.place_id = APIinterface.getStorage("place_id");
      APIinterface.socialRegistration(data)
        .then((data) => {
          let $completeRegistration = false;
          if (!APIinterface.empty(data.details.complete_registration)) {
            $completeRegistration = data.details.complete_registration;
          }
          if (data.details.verification === "1") {
            this.$router.push({
              path: "/account/verify",
              query: { uuid: data.details.uuid, msg: data.msg },
            });
          } else {
            console.debug("=>" + $completeRegistration);
            if ($completeRegistration) {
              this.$router.push({
                path: "/account/complete-registration",
                query: { uuid: data.details.uuid },
              });
            } else {
              APIinterface.notify("dark", data.msg, "check_circle", this.$q);
              auth.setUser(data.details.user_data);
              auth.setToken(data.details.user_token);
              this.ClientStore.user_settings = data.details.user_settings;

              const $placeId = APIinterface.getStorage("place_id");
              if (typeof $placeId !== "undefined" && $placeId !== null) {
                if (
                  typeof this.redirect !== "undefined" &&
                  this.redirect !== null
                ) {
                  this.$router.push(this.redirect);
                } else {
                  this.$router.push("/home");
                }
              } else {
                this.$router.push("/location");
              }
            }
          }
        })
        .catch((error) => {
          APIinterface.notify("dark", error, "error", this.$q);
        })
        .then((data) => {});
    },
  },
};
</script>
