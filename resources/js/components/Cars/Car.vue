<template>
    <div id="car-frame" :style="{ borderColor: carcolor }">
        <h2> Car #{{ carnumber }} </h2>
        <h3> Driven by: {{ cardriver }} </h3>
        <h3> {{ carmodel }}</h3>
        <h3> Team {{ carteam }}</h3>
        <h3> Avg. Lap Time: {{ caravglaptime }}</h3>
        <p> Car ID# {{ carid }}</p>
        <button @click="goToDetail(carid)">Details</button>
    </div>
</template>

<script setup lang="ts">
import { useRouter } from 'vue-router';
const router = useRouter();

const props = defineProps({
  carcolor: String,
  carnumber: Number,
  cardriver: String,
  carmodel: String,
  carteam: String,
  caravglaptime: Number,
  carid: String,
});

function goToDetail(carNumberId) {
  router.push({path: `/car-detail/${carNumberId}`})
}
</script>

<style scoped>
@import "Car.css";
</style>