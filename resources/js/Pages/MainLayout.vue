<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div>
        <nav class="flex items-center justify-between p-4 dark:bg-gray-400">
            <div class="text-xl font-bold">
                <span class="text-white">CAR |</span>
                <span class="text-red-700"> BIDDERS</span>
            </div>

            <div class="flex gap-4">
                <Link href="/" class="font-bold text-white hover:text-red-700"
                    >Home</Link
                >
                <Link
                    href="/bidders"
                    class="font-bold text-white hover:text-red-700"
                    >Bidders</Link
                >
                <Link href="/cars" class="font-bold text-white hover:text-red-700"
                    >Cars</Link
                >
            </div>
        </nav>
    </div>
    <slot />
</template>

<style scoped></style>
