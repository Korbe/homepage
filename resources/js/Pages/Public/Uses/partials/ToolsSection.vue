<template>
    <section class="md:border-l md:border-zinc-100 md:pl-6 md:dark:border-zinc-700/40">
        <div class="grid max-w-3xl grid-cols-1 items-baseline gap-y-8 md:grid-cols-4">
            <h2 class="text-sm font-semibold text-brand-headline dark:text-brand-headline-dark">
                {{ title }}
            </h2>
            <div class="md:col-span-3">
                <ul role="list">
                    <slot></slot>
                </ul>
            </div>
        </div>
    </section>
</template>

<script setup>
const props = defineProps({
    title: {
        type: String,
        required: true,
    },
})
</script>