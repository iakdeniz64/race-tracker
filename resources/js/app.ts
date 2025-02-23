import { createApp } from 'vue';
import App from './App.vue';
import router from '../../routes/index';
import './App.css'

const app = createApp(App);
app.use(router);
app.mount('#app');
