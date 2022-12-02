<template>
  <template v-for="category in data_category" :key="category.cat_id">
     <div class="text-h6 text-weight-medium">{{category.category_name}}</div>

     <q-list class="qlist-no-padding" >
       <template v-for="items_id in category.items" :key="items_id">
       <q-item>
         <q-item-section avatar>
            <q-img
            :src="data_items[items_id].url_image"
            lazy
            fit="cover"
            style="height:50px; width:50px;"
            class="rounded-borders"
          />
        </q-item-section>
        <q-item-section>
          <q-item-label lines="1" class="font12 text-weight-bold q-mb-sm">
            {{ data_items[items_id].item_name }}
          </q-item-label>
          <q-item-label v-if="data_items[items_id]"  class="font12 text-weight-medium">

            <template v-if="data_items[items_id].price[0]">
              <template v-if="data_items[items_id].price[0].discount <=0">
                <span class="q-mr-sm">{{data_items[items_id].price[0].size_name}} {{data_items[items_id].price[0].pretty_price}}</span>
              </template>
              <template v-else>
                <span class="q-mr-sm">{{data_items[items_id].price[0].size_name}} <del>{{data_items[items_id].price[0].pretty_price}}</del> {{data_items[items_id].price[0].pretty_price_after_discount}}</span>
              </template>
            </template>

          </q-item-label>
        </q-item-section>
        <q-item-section side>
           <template v-if="data_items[items_id].total_addon <=0 && data_items[items_id].total_meta <=0 && data_items[items_id].price.length<=1 ">
              <q-btn
              color="primary"
              text-color="dark"
              dense icon="eva-plus-outline"
              size="sm"
              class="q-pl-xs q-pr-xs"
              unelevated
              />
           </template>
           <template v-else>
              <q-btn
              color="primary"
              text-color="dark"
              dense icon="eva-plus-outline"
              size="sm"
              class="q-pl-xs q-pr-xs"
              unelevated
              />
           </template>
        </q-item-section>
       </q-item>
       <q-separator></q-separator>
       </template>

     </q-list>

  </template>
</template>

<script>
import APIinterface from 'src/api/APIinterface'

export default {
  name: 'MenuList',
  props: ['slug'],
  data () {
    return {
      data: [],
      data_category: [],
      data_items: [],
      loading: false,
      category_seleted: '',
      itemRefs: [],
      category_position: []
    }
  },
  watch: {
    slug (newval, oldval) {
      this.geStoreMenu()
    }
  },
  mounted () {
    this.geStoreMenu()
  },
  methods: {
    geStoreMenu () {
      this.loading = true
      APIinterface.geStoreMenu(this.slug)
        .then(data => {
          this.data_category = data.details.data.category
          this.data_items = data.details.data.items
        })
        .catch(error => {
          console.debug(error)
        })
        .then(data => {
          this.loading = false
        })
    }
  }
}
</script>
