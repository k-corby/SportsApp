import EventAPI from "../api/event";

const CREATING_EVENT = "CREATING_EVENT",
  CREATING_EVENT_SUCCESS = "CREATING_EVENT_SUCCESS",
  CREATING_EVENT_ERROR = "CREATING_EVENT_ERROR",
  FETCHING_EVENTS = "FETCHING_EVENTS",
  FETCHING_EVENTS_SUCCESS = "FETCHING_EVENTS_SUCCESS",
  FETCHING_EVENTS_ERROR = "FETCHING_EVENTS_ERROR";

export default {
  namespaced: true,
  state: {
    isLoading: false,
    error: null,
    events: []
  },
  getters: {
    isLoading(state) {
      return state.isLoading;
    },
    hasError(state) {
      return state.error !== null;
    },
    error(state) {
      return state.error;
    },
    hasEVENTs(state) {
      return state.events.length > 0;
    },
    EVENTs(state) {
      return state.events;
    }
  },
  mutations: {
    [CREATING_EVENT](state) {
      state.isLoading = true;
      state.error = null;
    },
    [CREATING_EVENT_SUCCESS](state, EVENT) {
      state.isLoading = false;
      state.error = null;
      state.events.unshift(EVENT);
    },
    [CREATING_EVENT_ERROR](state, error) {
      state.isLoading = false;
      state.error = error;
      state.events = [];
    },
    [FETCHING_EVENTS](state) {
      state.isLoading = true;
      state.error = null;
      state.events = [];
    },
    [FETCHING_EVENTS_SUCCESS](state, EVENTs) {
      state.isLoading = false;
      state.error = null;
      state.events = EVENTs;
    },
    [FETCHING_EVENTS_ERROR](state, error) {
      state.isLoading = false;
      state.error = error;
      state.events = [];
    }
  },
  actions: {
    async create({ commit }, message) {
      commit(CREATING_EVENT);
      try {
        let response = await EventAPI.create(message);
        commit(CREATING_EVENT_SUCCESS, response.data);
        return response.data;
      } catch (error) {
        commit(CREATING_EVENT_ERROR, error);
        return null;
      }
    },
    async findAll({ commit }) {
      commit(FETCHING_EVENTS);
      try {
        let response = await EventAPI.findAll();
        console.log(response);
        commit(FETCHING_EVENTS_SUCCESS, response.data);
        return response.data;
      } catch (error) {
        commit(FETCHING_EVENTS_ERROR, error);
        return null;
      }
    }
  }
};