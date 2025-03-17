<template>
    <li>
        <Link :href="href" :class="navItemClasses">
        <slot></slot>
        <span v-if="isActive"
            class="absolute inset-x-1 -bottom-px h-px bg-linear-to-r from-brand/0 via-brand/40 to-brand/0"></span>
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
            ? 'text-brand'
            : 'hover:text-brand'
    ]
})
</script>