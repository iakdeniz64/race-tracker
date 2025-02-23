<template>
    <div id="app-frame">
          <div v-for="car in cars" :key="car.id" id="car-element"> 
           <Car 
           :carcolor=car.attributes.color 
           :carnumber=car.attributes.number 
           :cardriver=car.attributes.driver 
           :carmodel=car.attributes.model 
           :carteam=car.attributes.team 
           :caravglaptime=car.attributes.average_lap_time
           :carid="car.id"
           />
          </div>
    </div>
</template>

<script setup lang="ts">
import Car from './Cars/Car.vue';
import { onMounted, ref } from 'vue';
import axios from 'axios';

const cars = ref([]);

async function fetchCars() {
    try {
      const response = await axios.get('/api/car');
      cars.value = response.data.data;
    } catch (error) {
      console.error("Error fetching cars:", error);
    }
  };

onMounted(fetchCars);
</script>

<style scoped>
@import "../../css/button.css";
@import "AppFrame.css";
</style>

