<script setup>
defineProps(['cars']);
</script>

<template>
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-lg text-center">
            <h1 class="mb-4 text-2xl font-bold">Cars | List</h1>
            <input
                type="text"
                v-model="search"
                placeholder="Search..."
                class="w-full p-2 mb-4 text-center border"
            >
            <div v-for="car in cars" :key="car.id" class="p-4 my-2 border rounded shadow">
                <p class="font-semibold">Make: {{ car.make }}</p>
                <p>Model: {{ car.model }}</p>
                <p>Year: {{ car.year }}</p>
                <p>Miles: {{ car.miles }}</p>
            </div>
        </div>
    </div>
</template>
