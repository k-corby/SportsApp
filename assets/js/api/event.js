import axios from "axios";

export default {
  create(message) {
    return axios.post("/events", {
      message: message
    });
  },
  findAll() {
    return axios.get("/events");
  }
};