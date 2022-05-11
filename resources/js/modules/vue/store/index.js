import { createStore } from "vuex";

import windowModule from "./modules/window";

export default createStore({
    modules: {
        window: windowModule,
    },
});
