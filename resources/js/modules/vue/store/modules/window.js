export default {
    namespaced: true,
    state() {
        return {
            size: {
                width: 0,
                height: 0,
            },
            scroll: {
                x: 0,
                y: 0,
            },
        };
    },
    getters: {
        size(state) {
            return state.size;
        },
        scroll(state) {
            return state.scroll;
        },
        yScrollPercentage(state) {
            // division by zero safeguard
            if (state.size.height === 0) {
                return 0;
            }

            return Math.max(Math.min(state.scroll.y / state.size.height, 1), 0);
        },
        isMobile(state) {
            return state.size.width < 768;
        },
    },
    mutations: {
        setSize(state, payload) {
            state.size = payload;
        },
        setScroll(state, payload) {
            state.scroll = payload;
        },
    },
    actions: {
        getWindowSize() {
            var win = window,
                doc = document,
                docElem = doc.documentElement,
                body = doc.getElementsByTagName("body")[0],
                width =
                    win.innerWidth || docElem.clientWidth || body.clientWidth,
                height =
                    win.innerHeight ||
                    docElem.clientHeight ||
                    body.clientHeight;
            return { width, height };
        },
        getWindowScroll() {
            return {
                x: window.scrollX,
                y: window.scrollY,
            };
        },
        async initialize({ dispatch, commit }) {
            // get initial values
            commit("setSize", await dispatch("getWindowSize"));
            commit("setScroll", await dispatch("getWindowScroll"));

            // loggers/listeners
            window.addEventListener("resize", async () =>
                commit("setSize", await dispatch("getWindowSize"))
            );
            window.addEventListener("scroll", async () =>
                commit("setScroll", await dispatch("getWindowScroll"))
            );
        },
    },
};
