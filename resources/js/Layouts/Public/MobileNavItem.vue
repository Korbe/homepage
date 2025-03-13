<template>
    <li>
        <PopoverButton class="block py-2">
            <Link :href="href" :class="navItemClasses">
            <slot></slot>
            </Link>
        </PopoverButton>
    </li>
</template>

<script setup>
import { defineProps, computed } from "vue";
import { PopoverButton } from "@headlessui/vue";

const props = defineProps({
    href: {
        type: String,
        required: true
    }
})

const isActive = computed(() => window.location.pathname === props.href)

const navItemClasses = computed(() => {
    return [
        'relative block transition',
        isActive.value
            ? 'text-teal-500 dark:text-teal-400'
            : 'hover:text-teal-500 dark:hover:text-teal-400'
    ]
})
</script>
