<script setup>
defineProps(['bidders']);
</script>

<template>
    <div>
        <h1 class="text-2xl font-bold">Bidders</h1>
        <input type="text" v-model="search" placeholder="Search..." class="p-2 mb-4 border">
        <div v-for="bidder in bidders" :key="bidder.id" class="p-4 my-2 border">
            <p>{{ bidder.first_name }} {{ bidder.last_name }}</p>
            <p>Email: {{ bidder.email }}</p>
            <p>Address: {{ bidder.address }}</p>
        </div>
    </div>
</template>
