<script setup>
defineProps(['cars']);
</script>

<template>
    <div>
        <h1 class="text-2xl font-bold">Cars</h1>
        <input type="text" v-model="search" placeholder="Search..." class="p-2 mb-4 border">
        <div v-for="car in cars" :key="car.id" class="p-4 my-2 border">
            <p>Make: {{ car.make }}</p>
            <p>Model: {{ car.model }}</p>
            <p>Year: {{ car.year }}</p>
            <p>Miles: {{ car.miles }}</p>
        </div>
    </div>
</template>
