<template>
  <q-pull-to-refresh @refresh="refresh">
    <q-header
      reveal
      reveal-offset="10"
      :class="{
        'bg-mydark text-white': $q.dark.mode,
        'bg-white text-black': !$q.dark.mode,
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
        <q-toolbar-title class="text-weight-bold"
          >Order Confirmation</q-toolbar-title
        >
      </q-toolbar>
    </q-header>
    <q-page
      :class="{
        'flex flex-center': !CartStore.hasItem && !CartStore.cart_loading,
      }"
    >
      <template v-if="CartStore.cart_loading">
        <q-inner-loading
          :showing="true"
          color="primary"
          size="md"
          label-class="dark"
      /></template>

      <template v-else-if="!CartStore.hasItem && !CartStore.cart_loading">
        <div class="text-center full-width">
          <q-img
            src="cart-empty.png"
            fit="fill"
            spinner-color="primary"
            style="height: 80px; max-width: 80px"
          />
          <div class="text-h5 text-weight-bold">Your cart is empty</div>
          <p class="text-grey font12">
            You don't have any orders here! let's change that!
          </p>
        </div>
      </template>

      <template v-else>
        <!-- info -->
        <div class="q-pl-md q-pr-md q-mb-sm">
          <q-btn
            no-caps
            unelevated
            flat
            class="q-pa-none"
            :to="{
              name: 'menu',
              params: { slug: CartStore.cart_merchant.slug },
            }"
          >
            <div class="font16 text-weight-bold line-normal">
              {{ CartStore.cart_merchant.restaurant_name }}
            </div>
            <q-icon name="las la-angle-right" color="grey" size="15px"></q-icon>
          </q-btn>
          <div class="row q-gutter-sm">
            <q-img
              :src="CartStore.cart_merchant.logo"
              lazy
              fit="cover"
              style="height: 70px; width: 70px"
              class="radius8"
              spinner-color="amber"
              spinner-size="sm"
            />

            <div class="col-8">
              <div class="font12 text-weight-bold">
                <template
                  v-if="
                    CartStore.data_transaction[
                      CartStore.transaction_info.transaction_type
                    ]
                  "
                >
                  {{
                    CartStore.data_transaction[
                      CartStore.transaction_info.transaction_type
                    ].service_name
                  }}
                </template>
                <template v-else>
                  {{ CartStore.transaction_info.transaction_type }}
                </template>
                ,
                <span class="text-capitalize"
                  >{{ CartStore.transaction_info.whento_deliver }},</span
                >
              </div>

              <div
                v-if="CartStore.transaction_info.whento_deliver == 'schedule'"
                class="font10 text-weight-light text-weight-medium"
              >
                {{ CartStore.transaction_info.delivery_date_pretty }}
                {{ CartStore.transaction_info.delivery_time.pretty_time }}
              </div>

              <div v-else class="font11 text-weight-light">
                {{
                  CartStore.data_transaction[
                    CartStore.transaction_info.transaction_type
                  ].service_name
                }}
                in {{ CartStore.transaction_info.estimation }}, mins
              </div>

              <div class="font11 text-weight-light ellipsis">
                {{ CartStore.cart_merchant.address }}
              </div>

              <q-btn
                flat
                :color="$q.dark.mode ? 'secondary' : 'blue'"
                no-caps
                label="Change order settings"
                dense
                size="sm"
                class="q-pt-none"
                @click="this.$refs.delivery_sched.showSched(true)"
              />
            </div>
          </div>
        </div>
        <!-- end info -->

        <div
          class="q-pl-md q-pr-md q-mb-sm ellipsis font13 text-weight-bold q-pt-xs"
        >
          <span class="text-capitalize">{{
            CartStore.transaction_info.transaction_type
          }}</span>
          Details
        </div>

        <q-list dense>
          <q-item>
            <q-item-section avatar>
              <q-avatar color="secondary" size="md" text-color="white">
                <q-icon name="las la-phone" size="23px"></q-icon>
              </q-avatar>
            </q-item-section>
            <q-item-section>
              <template v-if="CartStore.phone_details.default_prefix">
                ({{ CartStore.phone_details.default_prefix }})
              </template>
              {{ CartStore.phone_details.contact_number }}
            </q-item-section>
            <q-item-section side>
              <q-btn
                @click="this.$refs.change_phone.showModal(true)"
                flat
                :color="$q.dark.mode ? 'secondary' : 'blue'"
                no-caps
                label="Change"
                dense
                size="md"
              />
            </q-item-section>
          </q-item>
          <q-item
            v-if="CartStore.transaction_info.transaction_type == 'delivery'"
          >
            <q-item-section avatar>
              <q-avatar color="secondary" size="md" text-color="white">
                <q-icon name="las la-map-marker-alt" size="23px"></q-icon>
              </q-avatar>
            </q-item-section>
            <q-item-section>
              <q-item-label lines="2">
                {{ CartStore.address_component.formatted_address }}
              </q-item-label>
            </q-item-section>
            <q-item-section side>
              <q-btn
                flat
                :color="$q.dark.mode ? 'secondary' : 'blue'"
                no-caps
                label="Change"
                dense
                size="md"
                @click="this.$refs.client_address.showModal(true)"
              />
            </q-item-section>
          </q-item>

          <q-item v-else>
            <q-item-section avatar>
              <q-avatar color="secondary" size="md" text-color="white">
                <q-icon name="las la-utensils" size="23px"></q-icon>
              </q-avatar>
            </q-item-section>
            <q-item-section>
              <q-item-label lines="2">{{
                CartStore.cart_merchant.address
              }}</q-item-label>
            </q-item-section>
            <q-item-section side>
              <q-btn
                v-if="CartStore.transaction_info.transaction_type == 'delivery'"
                flat
                :color="$q.dark.mode ? 'secondary' : 'blue'"
                no-caps
                label="Change"
                dense
                size="md"
              />
            </q-item-section>
          </q-item>

          <q-item>
            <q-item-section avatar>
              <q-avatar color="secondary" size="md" text-color="white">
                <q-icon name="las la-utensils" size="23px"></q-icon>
              </q-avatar>
            </q-item-section>
            <q-item-section>
              <q-item-label>Cutlery</q-item-label>
              <q-item-label caption
                >Include utensils, napkins, etc.</q-item-label
              >
            </q-item-section>
            <q-item-section side>
              <q-toggle
                v-model="include_utensils"
                @update:model-value="setUtensil"
              />
            </q-item-section>
          </q-item>
        </q-list>

        <q-list bordered>
          <q-expansion-item
            expand-separator
            label="Order Details"
            :caption="
              CartStore.items_count > 0
                ? `${CartStore.items_count} items`
                : `${CartStore.items_count} item`
            "
            class="text-weight-bold"
          >
            <CartDetails
              ref="cart_details"
              :is_checkout="false"
              :payload="payload"
            />
            <DIV
              v-if="CartStore.hasItem"
              class="q-pl-md q-pr-md border-grey-top"
            >
              <div class="row justify-end">
                <q-btn
                  unelevated
                  :color="$q.dark.mode ? 'grey600' : 'mygrey'"
                  :text-color="$q.dark.mode ? 'grey300' : 'dark'"
                  no-caps
                  size="md"
                  class="radius8 q-mt-sm q-mb-md"
                  :to="{
                    name: 'menu',
                    params: { slug: CartStore.cart_merchant.slug },
                  }"
                >
                  <q-icon name="las la-plus" size="15px"></q-icon>
                  <div class="q-pl-sm">Add more items</div>
                </q-btn>
              </div>
            </DIV>
          </q-expansion-item>
        </q-list>

        <div class="q-pl-md q-pr-md q-mb-sm font13 text-weight-bold q-pt-xs">
          Discount
        </div>

        <template v-if="PromoStore.loading">
          <div class="q-pl-md q-pr-md row q-gutter-sm items-center">
            <div class="col-2"><q-skeleton type="QCheckbox" /></div>
            <div class="col"><q-skeleton type="rect" /></div>
            <div class="col-3"><q-skeleton type="rect" /></div>
          </div>
        </template>
        <template v-else>
          <q-list class="q-mb-sm">
            <q-item>
              <q-item-section avatar>
                <q-avatar color="secondary" size="md" text-color="white">
                  <q-icon name="local_offer" size="21px"></q-icon>
                </q-avatar>
              </q-item-section>
              <q-item-section>
                <template
                  v-if="
                    PromoStore.promo_selected[
                      CartStore.cart_merchant.merchant_id
                    ] &&
                    PromoStore.promo_selected[
                      CartStore.cart_merchant.merchant_id
                    ].promo_id
                  "
                >
                  <span
                    class=""
                    :class="{
                      'text-grey300': $q.dark.mode,
                      'text-grey-8': !$q.dark.mode,
                    }"
                  >
                    {{
                      PromoStore.promo_selected[
                        CartStore.cart_merchant.merchant_id
                      ].savings
                    }}
                  </span>
                </template>
                <template v-else> Add a promo </template>
              </q-item-section>
              <q-item-section side>
                <q-btn
                  v-if="
                    PromoStore.promo_selected[
                      CartStore.cart_merchant.merchant_id
                    ] &&
                    PromoStore.promo_selected[
                      CartStore.cart_merchant.merchant_id
                    ].promo_id
                  "
                  @click="
                    removePromo(
                      CartStore.cart_merchant.merchant_id,
                      PromoStore.promo_selected[
                        CartStore.cart_merchant.merchant_id
                      ]
                    )
                  "
                  :loading="loading_promo_rm"
                  flat
                  :color="$q.dark.mode ? 'secondary' : 'blue'"
                  no-caps
                  label="Remove"
                  dense
                  size="md"
                />
                <q-btn
                  v-else
                  @click="this.$refs.promo_list.showModal(true)"
                  flat
                  :color="$q.dark.mode ? 'secondary' : 'blue'"
                  no-caps
                  label="Add"
                  dense
                  size="md"
                />
              </q-item-section>
            </q-item>
          </q-list>
        </template>

        <div
          class="q-pl-md q-pr-md q-mt-sm ellipsis font13 text-weight-bold q-pt-xs border-grey-top"
        >
          Summary
        </div>
        <q-list dense class="text-grey qlist-min-height text-weight-medium">
          <template v-for="summary in CartStore.cart_summary" :key="summary">
            <q-item
              v-if="summary.type == 'total'"
              class="text-weight-bold font16 text-dark hidden"
            >
              <q-item-section>{{ summary.name }}</q-item-section>
              <q-item-section side>{{ summary.value }}</q-item-section>
            </q-item>
            <q-item v-else>
              <q-item-section>{{ summary.name }}</q-item-section>
              <q-item-section side>{{ summary.value }}</q-item-section>
            </q-item>
          </template>
        </q-list>

        <div
          v-if="
            DataStore.tips_data &&
            !CartStore.cart_loading &&
            CartStore.enabled_tip == 1
          "
          class="q-pl-md q-pr-md q-mb-sm q-pt-xs"
        >
          <div class="row items-center q-mb-sm justify-between">
            <div class="font13 text-weight-bold">Tips</div>
            <q-btn
              v-if="CartStore.tips_data.tips > 0"
              flat
              :color="$q.dark.mode ? 'secondary' : 'blue'"
              no-caps
              label="Remove tips"
              dense
              size="md"
              @click="removeTips"
              :loading="loading_tip_rm"
            />
          </div>

          <template v-if="CartStore.enabled_tip == 1">
            <TipsList
              ref="tips"
              @after-applytips="afterApplytips"
              :tips_data="DataStore.tips_data"
              :tips_value="CartStore.tips_data"
            />
          </template>
        </div>

        <!-- <pre>{{ payment_uuid }}</pre> -->
        <div class="q-pl-md q-pr-md q-mt-sm q-pt-xs border-grey-top">
          <div class="row items-center justify-between">
            <div class="font13 text-weight-bold">Payment</div>
            <q-btn
              flat
              :color="$q.dark.mode ? 'secondary' : 'blue'"
              no-caps
              label="Add"
              dense
              size="md"
              to="/account/payments/new?redirect=/checkout"
            />
          </div>
        </div>
        <PaymentListSaved
          ref="saved_payment"
          v-if="CartStore.cart_merchant.merchant_id"
          @set-paymentuuid="setPaymentuuid"
          @after-loadpaymentlist="afterLoadpaymentlist"
          :merchant_id="CartStore.cart_merchant.merchant_id"
        />

        <q-space class="q-pa-md"></q-space>
      </template>
    </q-page>
  </q-pull-to-refresh>

  <q-inner-loading
    :showing="CartStore.cart_reloading"
    color="primary"
    size="md"
    label-class="dark"
  />

  <q-footer
    v-if="CartStore.items_count > 0 && !CartStore.cart_loading"
    reveal
    class="q-pl-md q-pr-md q-pb-sm q-pt-sm text-dark"
    :class="{
      'bg-primary': !CartStore.cart_reloading,
      'bg-grey-5': CartStore.cart_reloading,
    }"
  >
    <q-btn
      @click="onPlaceorder"
      :loading="loading"
      :disable="!CartStore.canProceed"
      unelevated
      text-color="white"
      no-caps
      class="radius10 fit"
      :color="{
        primary: !CartStore.cart_reloading,
        'grey-5': CartStore.cart_reloading,
      }"
    >
      <div class="row items-center justify-between fit">
        <div class="text-weight-bold">Place Order</div>
        <div v-if="CartStore.cart_total" class="text-weight-bold">
          {{ CartStore.cart_total.value }}
        </div>
      </div>
    </q-btn>
  </q-footer>

  <DeliverySched
    ref="delivery_sched"
    :slug="CartStore.cart_merchant.slug"
    @after-savetrans="afterSavetrans"
  />

  <ChangePhone
    ref="change_phone"
    @after-changephone="afterChangephone"
    :prefixes="DataStore.phone_prefix_data"
    :phone_prefix_orig="CartStore.phone_details.default_prefix"
    :contact_number_orig="CartStore.phone_details.contact_number"
  />
  <ClientAddress
    ref="client_address"
    :redirect="this.$route.path"
    @after-setplaceid="afterSetplaceid"
    @fill-address="fillAddress"
  />

  <PromoList
    v-if="CartStore.cart_merchant.merchant_id"
    ref="promo_list"
    :enabled_voucher="CartStore.enabled_voucher"
    @after-applypromo="afterApplypromo"
    @after-removepromo="afterRemovepromo"
    :merchant_id="CartStore.cart_merchant.merchant_id"
  />

  <!-- PAYMENTS COMPONENTS -->
  <StripeComponents
    ref="stripe"
    payment_code="stripe"
    title="Add Stripe"
    :label="{
      submit: 'Add Stripe',
      notes: 'Add your card account',
    }"
    :payment_credentials="
      PaymentStore.credentials[CartStore.cart_merchant.merchant_id]
    "
    @after-addpayment="afterAddpayment"
    @after-payment="afterPayment"
  />

  <PaypalComponents
    ref="paypal"
    payment_code="paypal"
    title="Add Paypal"
    :label="{
      submit: 'Add Paypal',
      notes: 'Pay using your paypal account',
      payment_title: 'Pay using Paypal',
      payment_subtitle:
        'You will re-direct to paypal account to login to your account.',
    }"
    :payment_credentials="
      PaymentStore.credentials[CartStore.cart_merchant.merchant_id]
    "
    @after-addpayment="afterAddpayment"
    @after-payment="afterPayment"
  />

  <RazorpayComponents
    ref="razorpay"
    payment_code="razorpay"
    title="Add Razorpay"
    :label="{
      submit: 'Submit',
      notes: 'Pay using your Razorpay account',
    }"
    :payment_credentials="
      PaymentStore.credentials[CartStore.cart_merchant.merchant_id]
    "
    @after-addpayment="afterAddpayment"
    @after-payment="afterPayment"
  />

  <MercadopagoComponents
    ref="mercadopago"
    payment_code="mercadopago"
    title="Add Mercadopago"
    :label="{
      submit: 'Add Mercadopago',
      submit_form: 'Submit',
      notes: 'Pay using your mercadopago account',
    }"
    :payment_credentials="
      PaymentStore.credentials[CartStore.cart_merchant.merchant_id]
    "
    @after-addpayment="afterAddpayment"
    @after-payment="afterPayment"
  />

  <!-- END PAYMENTS COMPONENTS -->
</template>

<script>
import { defineAsyncComponent } from "vue";
import APIinterface from "src/api/APIinterface";
import { useCartStore } from "stores/CartStore";
import { usePromoStore } from "stores/PromoStore";
import { useMapsStore } from "stores/StoreMaps";
import { useDataStore } from "stores/DataStore";
import { usePaymentStore } from "stores/PaymentStore";
import { useDeliveryschedStore } from "stores/DeliverySched";

export default {
  name: "CheckoutPage",
  components: {
    CartDetails: defineAsyncComponent(() =>
      import("components/CartDetails.vue")
    ),
    ClientAddress: defineAsyncComponent(() =>
      import("components/ClientAddress.vue")
    ),
    ChangePhone: defineAsyncComponent(() =>
      import("components/ChangePhone.vue")
    ),
    DeliverySched: defineAsyncComponent(() =>
      import("components/DeliverySched.vue")
    ),
    PromoList: defineAsyncComponent(() => import("components/PromoList.vue")),
    TipsList: defineAsyncComponent(() => import("components/TipsList.vue")),
    PaymentListSaved: defineAsyncComponent(() =>
      import("components/PaymentListSaved.vue")
    ),
    StripeComponents: defineAsyncComponent(() =>
      import("components/StripeComponents.vue")
    ),
    PaypalComponents: defineAsyncComponent(() =>
      import("components/PaypalComponents.vue")
    ),
    RazorpayComponents: defineAsyncComponent(() =>
      import("components/RazorpayComponents.vue")
    ),
    MercadopagoComponents: defineAsyncComponent(() =>
      import("components/MercadopagoComponents.vue")
    ),
  },
  setup() {
    const CartStore = useCartStore();
    const PromoStore = usePromoStore();
    const MapsStore = useMapsStore();
    const DataStore = useDataStore();
    const PaymentStore = usePaymentStore();
    const DeliveryschedStore = useDeliveryschedStore();
    return {
      CartStore,
      PromoStore,
      MapsStore,
      DataStore,
      PaymentStore,
      DeliveryschedStore,
    };
  },
  data() {
    return {
      include_utensils: false,
      modal_paymentlist: false,
      payment_credentials: [],
      payment_uuid: "",
      // payload: [
      //   "items",
      //   "subtotal",
      //   "distance_local",
      //   "items_count",
      //   "merchant_info",
      //   "check_opening",
      //   "transaction_info",
      // ],
      payload: [
        "items",
        "merchant_info",
        "service_fee",
        "delivery_fee",
        "packaging",
        "tips",
        "checkout",
        "discount",
        "distance",
        "summary",
        "subtotal",
        "total",
        "items_count",
        "check_opening",
        "transaction_info",
      ],
      loading: false,
      loading_promo_rm: false,
      loading_tip_rm: false,
    };
  },
  created() {
    this.CartStore.getCart(true, this.payload);

    if (!this.DataStore.hadPrefix()) {
      this.DataStore.getAttributes();
    }
    const includeUtensils = APIinterface.getStorage("include_utensils");
    if (!APIinterface.empty(includeUtensils)) {
      this.include_utensils = includeUtensils;
    }

    this.DeliveryschedStore.getDeliverySched(
      APIinterface.getStorage("cart_uuid"),
      APIinterface.getStorage("merchant_slug")
    );
  },

  methods: {
    refresh(done) {
      this.CartStore.getCart(true, this.payload);
      setTimeout(() => {
        done();
      }, 1000);
    },
    setUtensil(value) {
      APIinterface.setStorage("include_utensils", value);
    },
    afterSetplaceid() {
      console.log("afterSetplaceid");
      this.CartStore.getCart(false, this.payload);
    },
    fillAddress(data) {
      //console.log(data);
      this.$refs.client_address.showModal(false);
      this.$refs.address_details.location_data = data;
      this.$refs.address_details.showModal();
    },
    afterSaveaddress() {
      // this.TransactionStore.TransactionInfo();
      // this.$refs.cart_details.getCart(false);
      //this.TransactionStore.TransactionInfo();
      this.CartStore.getCart(false, this.payload);
    },
    afterSavetrans() {
      this.afterSaveaddress();
    },
    afterChangephone(data) {
      this.CartStore.getCart(false, this.payload);
    },
    afterApplypromo() {
      this.CartStore.getCart(false, this.payload);
    },
    afterRemovepromo() {
      this.CartStore.getCart(false, this.payload);
    },
    afterApplytips() {
      console.log("afterApplytips");
      this.CartStore.getCart(false, this.payload);
    },
    setPaymentcredentials(data) {
      console.log("setPaymentcredentials");
      this.payment_credentials = data;
    },
    afterLoadpaymentlist(data) {
      if (data) {
        this.payment_credentials = data;
      } else {
        this.payment_credentials = [];
      }
    },
    setPaymentuuid(data) {
      this.payment_uuid = data;
    },
    onchoosePayment(data) {
      try {
        this.$refs[data.payment_code].showPaymentForm();
      } catch (error) {
        APIinterface.notify("dark", error, "error", this.$q);
      }
    },
    afterAddpayment() {
      this.modal_paymentlist = false;
    },
    afterPayment(data) {
      this.CartStore.getCart(true, this.payload);
      this.$router.push({
        path: "/order/successful",
        query: { order_uuid: data.order_uuid },
      });
    },
    onPlaceorder() {
      const $params = {
        cart_uuid: APIinterface.getStorage("cart_uuid"),
        local_id: APIinterface.getStorage("place_id"),
        include_utensils: this.include_utensils,
        payment_uuid: this.payment_uuid,
      };
      this.loading = true;
      APIinterface.PlaceOrder($params)
        .then((data) => {
          if (data.details.payment_instructions.method === "offline") {
            this.CartStore.getCart(true, this.payload);
            this.$router.replace({
              path: "/order/successful",
              query: { order_uuid: data.details.order_uuid },
            });
          } else {
            this.doPayment(data.details);
          }
        })
        .catch((error) => {
          APIinterface.notify("dark", error, "error", this.$q);
        })
        .then((data) => {
          this.loading = false;
        });
    },
    doPayment(data) {
      this.$refs[data.payment_code].PaymentRender(data);
    },
    transactionText(data) {
      if (data === "delivery") {
        return "Delivery to";
      } else if (data === "pickup") {
        return "Pickup to";
      } else if (data === "dinein") {
        return "Go to";
      }
    },
    removePromo(merchantID, data) {
      this.loading_promo_rm = true;
      const $params = {
        cart_uuid: APIinterface.getStorage("cart_uuid"),
        promo_id: data.promo_id,
        promo_type: data.promo_type,
      };
      APIinterface.removePromo($params)
        .then((data) => {
          this.PromoStore.promo_selected[merchantID] = [];
          this.CartStore.getCart(false, this.payload);
        })
        .catch((error) => {
          APIinterface.notify("dark", error, "error", this.$q);
        })
        .then((data) => {
          this.loading_promo_rm = false;
        });
    },
    removeTips() {
      this.loading_tip_rm = true;
      APIinterface.fetchDataPost(
        "removeTips",
        "cart_uuid=" + APIinterface.getStorage("cart_uuid")
      )
        .then((data) => {
          this.CartStore.getCart(false, this.payload);
        })
        .catch((error) => {})
        .then((data) => {
          this.loading_tip_rm = false;
        });
    },
  },
};
</script>
