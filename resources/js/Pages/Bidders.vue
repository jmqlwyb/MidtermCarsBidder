<script setup>
defineProps(['bidders']);
</script>

<template>
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-lg text-center">
            <h1 class="mb-4 text-2xl font-bold">Bidders | List</h1>
            <input
                type="text"
                v-model="search"
                placeholder="Search..."
                class="w-full p-2 mb-4 text-center border"
            >
            <div v-for="bidder in bidders" :key="bidder.id" class="p-4 my-2 border rounded shadow">
                <p class="font-semibold">{{ bidder.first_name }} {{ bidder.last_name }}</p>
                <p>Email: {{ bidder.email }}</p>
                <p>Address: {{ bidder.address }}</p>
            </div>
        </div>
    </div>
</template>
