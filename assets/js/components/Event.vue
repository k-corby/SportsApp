<template>
  <div>
    <div class="row col">
      <h1>Events</h1>
    </div>

    <div class="row col">
      <form>
        <div class="form-row">
          <div class="col-8">
            <input
              v-model="message"
              type="text"
              class="form-control"
            >
          </div>
          <div class="col-4">
            <button
              :disabled="message.length === 0 || isLoading"
              type="button"
              class="btn btn-primary"
              @click="createEvent()"
            >
              Create
            </button>
          </div>
        </div>
      </form>
    </div>

    <div
      v-if="isLoading"
      class="row col"
    >
      <p>Loading...</p>
    </div>

    <div
      v-else-if="hasError"
      class="row col"
    >
      <div
        class="alert alert-danger"
        role="alert"
      >
        {{ error }}
      </div>
    </div>

    <div
      v-else-if="!hasEvents"
      class="row col"
    >
      No events!
    </div>

    <div
      v-for="event in events"
      v-else
      :key="event.id"
      class="row col"
    >
      <event :message="event.name" />
    </div>
  </div>
</template>

<script>
import Event from "../components/Event";

export default {
  name: "Events",
  components: {
    Event
  },
  data() {
    return {
      message: ""
    };
  },
  computed: {
    isLoading() {
      return this.$store.getters["event/isLoading"];
    },
    hasError() {
      return this.$store.getters["event/hasError"];
    },
    error() {
      return this.$store.getters["event/error"];
    },
    hasEvents() {
      return this.$store.getters["event/hasEvents"];
    },
    events() {
      return this.$store.getters["event/events"];
    }
  },
  created() {
    this.$store.dispatch("event/findAll");
  },
  methods: {
    async createEvent() {
      const result = await this.$store.dispatch("event/create", this.$data.message);
      if (result !== null) {
        this.$data.message = "";
      }
    }
  }
};
</script>