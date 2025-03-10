<template>
    <Head :title="title" />

    <div class="flex h-full bg-zinc-200 dark:bg-black overflow-hidden">
        <div class="flex w-full">
            <div class="fixed inset-0 flex justify-center sm:px-8" style="z-index: 1;">
                <div class="flex w-full max-w-7xl lg:px-8">
                    <div
                        class="w-full bg-white ring-1 ring-zinc-100 dark:bg-zinc-900 dark:ring-zinc-300/20"
                    ></div>
                </div>
            </div>
            <div class="relative flex w-full flex-col overflow-y-auto" style="z-index: 2;">
                <PublicHeader />
                <main class="flex-auto relative">
                    <slot></slot>
                </main>
                <PublicFooter />
            </div>
        </div>
    </div>
</template>
<script setup>
import PublicFooter from "./PublicFooter.vue";
import PublicHeader from "./PublicHeader.vue";
import { Head } from "@inertiajs/vue3";

defineProps({
    title: String,
});
</script>