import './bootstrap';
import '../css/app.css'
import { createApp } from 'vue';
import axios from "axios";
import router from "@/components/router";
import App from "@/components/App.vue";



createApp(App).use(router).mount('#app')
