import Vue from "vue";
import Vuex from "vuex";
import EventModule from "./event";

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    event: EventModule
  }
});