import "./bootstrap";
import Vue from "vue";

Vue.component("input-text", require("./components/InputText").default);

new Vue({
    el: "#app"
});
