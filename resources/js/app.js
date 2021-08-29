require("./bootstrap");
require('alpinejs');

import { createApp } from "vue";
import Countman from "./components/Countman.vue";

const app = createApp({
  components: {
    Countman
  }
});

app.mount("#app");
