<template>

    <Head :title="title" />

    <SplashScreen />

    <CookieBanner />

    <div class="min-h-screen bg-zinc-200 dark:bg-black flex justify-center">
        <div class="w-full max-w-7xl bg-white dark:bg-zinc-900 flex flex-col min-h-screen">
            <PublicHeader />
            <main class="flex-auto relative p-6 sm:p-8">
                <slot></slot>
            </main>
            <PublicFooter />
        </div>
    </div>
</template>
<script setup>
import CookieBanner from "@/Components/CookieBanner.vue";
import PublicFooter from "./PublicFooter.vue";
import PublicHeader from "./PublicHeader.vue";
import { Head } from "@inertiajs/vue3";
import SplashScreen from "@/Components/SplashScreen.vue";

defineProps({
    title: String,
});
</script>