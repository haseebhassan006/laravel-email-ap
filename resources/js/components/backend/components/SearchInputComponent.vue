<template>
  <div>
        <div class="search-box me-2 mb-2 d-inline-block">
             <div class="position-relative">
                <input type="text" class="form-control" :placeholder="label" v-model="query" v-on:keyup="searchQuery">
                   <i class="bx bx-search-alt search-icon"></i>
            </div>
        </div>
  </div>
</template>

<script>
export default {
props:['label','name','apiurl'],
 data() {
    return {
      query: "",
    };
  },
  methods: {
    //asyncdata
    searchQuery: _.debounce(
      function () {
        this.$emit("loading", true);
        setTimeout(() => {
            this.search();
        }, 700);
      },
      500 // 500 milliseconds
    ),
   async search() {
      if (this.query.length > 2) {
       await axios.get(this.apiurl + "&query=" + this.query).then((response) => {
            this.$emit("loading", false);
            this.$emit("filterList", response.data);
            this.$emit("query", this.query);
          });
      } else {
        this.query = "";
        this.$emit("query", this.query);
        this.$emit("reload");
      }
    },
  },
  watch: {
    query() {
      if (this.query == "") {
        this.query = "";
        this.$emit("query", this.query);
        this.$emit("reload");
      }
    },
  },
}
</script>

