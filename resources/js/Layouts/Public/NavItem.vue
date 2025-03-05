<template>
    <li>
        <Link :href="href" :class="navItemClasses">
        <slot></slot>
        <span v-if="isActive"
            class="absolute inset-x-1 -bottom-px h-px bg-linear-to-r from-teal-500/0 via-teal-500/40 to-teal-500/0 dark:from-teal-400/0 dark:via-teal-400/40 dark:to-teal-400/0"></span>
        </Link>
    </li>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
    href: {
        type: String,
        required: true
    }
})

const isActive = computed(() => window.location.pathname === props.href)

const navItemClasses = computed(() => {
    return [
        'relative block px-3 py-2 transition',
        isActive.value
            ? 'text-teal-500 dark:text-teal-400'
            : 'hover:text-teal-500 dark:hover:text-teal-400'
    ]
})
</script>