import { createApp } from "vue";
import store from "./store";

// import Component from './components/Component.vue';

export default {
    initialize() {
        const app = createApp({});
        app.use(store);
        // app.component('component', Component);
        store.dispatch("window/initialize");
        app.mount("#app");
    },
};
