require("./bootstrap");
import Vue from "vue";
import VueRouter from "vue-router";
import axios from "axios";
window.Vue = require("vue");
window.axios = axios;
Vue.use(VueRouter);
import store from "./store";
import VueSweetalert2 from "vue-sweetalert2";
import "sweetalert2/dist/sweetalert2.min.css";
import swal from "sweetalert2";
window.swal = swal;
const options = {
    confirmButtonColor: "#41b882",
    cancelButtonColor: "#ff7674"
};


Vue.use(VueSweetalert2, options);
Vue.use(VueSweetalert2);

import Toasted from "vue-toasted";
Vue.use(Toasted, {
    duration: 9000,
    position: "top-right",
    action: {
        text: "Okay",
        onClick: (e, toastObject) => {
            toastObject.goAway(0);
        }
    }
});

import VueQuillEditor from 'vue-quill-editor'
import 'quill/dist/quill.core.css' // import styles
import 'quill/dist/quill.snow.css' // for snow theme
import 'quill/dist/quill.bubble.css' // for bubble theme
Vue.use(VueQuillEditor, /* { default global options } */ );
/**image viewer */

import Viewer from "v-viewer";
import "viewerjs/dist/viewer.css";
Vue.use(Viewer);
/**end of image */


axios.interceptors.request.use(
    config => {
        const token = localStorage.getItem('thoracicadmintoken');
        const auth = token ? `Bearer ${token}` : '';
        config.headers.common['Authorization'] = auth;
        return config;
    },
    error => Promise.reject(error),
);

import Login from "./pages/Login.vue";
import Dashboard from "./pages/Dashboard";
import ForgotPass from "./pages/ForgotPass.vue";
import Events from "./pages/Events.vue";
import Allgallery from "./pages/Allgallery.vue";
import Overview from "./pages/Overview.vue";
import Notfound from "./pages/Notfound.vue";
import Admin from "./pages/Admin.vue";
import newgallery from "./pages/newgallery.vue";
import Sidebar from "./pages/Sidebar.vue";
Vue.component('sidebar', Sidebar);
Vue.prototype.$churchusername = localStorage.getItem('thoracicadminusername');
import Embed from 'v-video-embed'
// global register
Vue.use(Embed);
// global


const router = new VueRouter({

    mode: "history",
    routes: [{
            path: "/admin-login",
            name: "login",
            component: Login
        },
        {
            path: "/admin-forgot-password",
            name: "ForgotPass",
            component: ForgotPass
        },
        {
            path: "/dashboard",
            name: "dashboard",
            component: Dashboard,
            meta: { requiresAuth: true },
            children: [

                {
                    path: "",
                    name: "Overview",
                    component: Overview
                },
                {
                    path: "administrators",
                    name: "Admin",
                    component: Admin
                },
                {
                    path: "gallery",
                    name: "gallery",
                    component: Allgallery
                },
                {
                    path: "new-gallery",
                    name: "newGallery",
                    component: newgallery
                },

                {
                    path: "gallery/:id",
                    name: "viewGallery",
                    component: newgallery
                },
                {
                    path: "events",
                    name: "events",
                    component: Events
                }

            ]
        }
    ]
});

// router.beforeEach((to, from, next) => {
//     if (to.matched.some(record => record.meta.requiresAuth)) {
//         if (store.getters.isLoggedIn) {
//             next();
//             return;
//         }
//         next("/admin-login");
//     } else {
//         next();
//     }
// });


import App from "./pages/App";
const app = new Vue({
    el: "#app",
    router,
    store,
    render: h => h(App),

});
