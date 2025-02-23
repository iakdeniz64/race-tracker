<template>
    <div id="car-detail-frame">
        <p> Car ID #{{ $route.params.id }} </p>
        <div v-if="laps && laps.length > 0" id="main-lap-frame">
            <div v-for="(lap, index) in laps" :key="lap.id" id="lap-frame">
            <Lap 
            :lapnumber=lap.attributes.lap_number
            :laptime=lap.attributes.lap_time
            :lapid="lap.id"
            />
            </div>
        </div>
        <div v-else>
            <p>Loading laps...</p>
        </div>
        <div id="lap-input-frame">
            <LapInput
            :carId="$route.params.id"
            @updatedLaps="(newLaps) => laps = newLaps"
            />
        </div>
    </div>
</template>

<script setup lang="ts">
import Lap from './Lap.vue';
import LapInput from '../LapInput/LapInput.vue';
import { useRoute } from 'vue-router';
import { ref, onMounted } from 'vue';
import axios from 'axios';
const route = useRoute();
const currentId = route.params.id;
const laps = ref([]);

async function fetchLaps() {
    try {
      const response = await axios.get(`/api/car/${currentId}`);
      laps.value = response.data.included;
    } catch (error) {
      console.error("Error fetching laps:", error);
    }
  };

onMounted(fetchLaps);

</script>



<style scoped>
@import "CarDetail.css";
</style>

