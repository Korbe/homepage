<template>
    <li>
        <PopoverButton class="block py-2">
            <Link :href="href">
                <slot></slot>
            </Link>
        </PopoverButton>
    </li>
</template>

<script setup>
import { defineProps } from "vue";
import { PopoverButton } from "@headlessui/vue";

const props = defineProps({
    href: String,
});
</script>
