<template>
    <li
        class="group relative flex flex-col items-start p-6 rounded-xl hover:bg-zinc-50 dark:hover:bg-zinc-800/50 transition">
        <h3 v-if="href" class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
            <a :href="href" target="_blank" class="relative z-10 block">
                {{ title }}
            </a>
        </h3>
        <h3 v-else class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
            {{ title }}
        </h3>

        <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">
            <slot></slot>
        </p>
    </li>

</template>

<script setup>
const props = defineProps({
    title: {
        type: String,
        required: true,
    },
    href: {
        type: String,
        required: false,
    },
})
</script>