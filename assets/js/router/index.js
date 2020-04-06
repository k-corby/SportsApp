import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../components/Home";
import Events from "../components/Event";

Vue.use(VueRouter);

export default new VueRouter({
  mode: "history",
  routes: [
    { path: "/", component: Home },
    { path: "/events", component: Events},
  ]
});