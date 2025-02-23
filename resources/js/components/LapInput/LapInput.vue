<template>
    <div id="lap-input-frame">
        <h3>Add a lap in seconds, between 95 and 600</h3>
        <input v-model="message" type="text" placeholder="Enter lap time" class="input-style" />
        <p v-if="validationMessage" class="error-message">{{ validationMessage }}</p>
        <p v-if="message.length > 0 && !validationMessage">
            <button @click="sendToLaps(carId, message)"> Submit Lap </button>
        </p>
    </div>
</template>

<script setup lang="ts">
import { computed, ref } from 'vue'
import axios from 'axios';
const emit = defineEmits(['updatedLaps'])
const message = ref('')
const props = defineProps({
    carId: String,
});

async function sendToLaps(carId, message){
    const sendData = {
        lap_time: message,
        is_valid: true
    }

    await axios.post(`/api/laptime/${carId}`, sendData, { headers: { "Content-Type": "application/json" }})
        .then(response => {
            emit('updatedLaps', response.data.included)
        })
        .catch(error => console.error("Error:", error));
    
}

const validationMessage = computed(() => {
  if (message.value === "") return "";
  if (!/^\d*\.?\d+$/.test(message.value)) return "Must be a valid number!";
  if (message.value.length > 10) return "Cannot exceed 10 characters!";
  const num = parseFloat(message.value);
  if (num < 95 || num > 600) return "Must be between 95 and 600!";
  return ""; // No errors
});

</script>

<style scoped>
@import "LapInput.css";
</style>

