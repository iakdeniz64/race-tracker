import { createRouter, createWebHistory } from 'vue-router';
import App from '../resources/js/App.vue';
import AppFrame from '../resources/js/components/AppFrame.vue';
import CarDetail from '../resources/js/components/Cars/CarDetail.vue';

const routes = [
  // { path: '/', name: 'App', component: App },
  { path: '/', name: 'AppFrame', component: AppFrame },
  { path: '/car-detail/:id', name: 'CarDetail', component: CarDetail },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;