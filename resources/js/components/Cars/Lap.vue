<template>
        <div id="lap-frame">
              <h2>Lap #{{ lapnumber }}</h2>
              <h3>Lap Time: {{ laptime }}</h3>
              <h3>Lap ID#: {{ lapid }}</h3>
        </div>
</template>

<script setup lang="ts">
const props = defineProps({
  lapnumber: Number,
  laptime: Number,
  lapid: String,
});
</script>

<style scoped>
@import "Lap.css";
</style>
    
    