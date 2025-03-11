<template>
    <li class="flex mt-8 border-t border-zinc-100 pt-8 dark:border-zinc-700/40">
        <a :href="emailHref"
            class="group flex text-sm font-medium text-zinc-800 transition hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500">
            <i
                class="text-2xl fa-solid fa-envelope h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-teal-500"></i>
            <span class="ml-4">{{ emailText }}</span>
        </a>
    </li>
    <li class="flex mt-4">
        <a :href="phoneHref"
            class="group flex text-sm font-medium text-zinc-800 transition hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500">
            <i
                class="text-2xl fa-solid fa-phone h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-teal-500"></i>
            <span class="ml-4">{{ phoneText }}</span>
        </a>
    </li>
</template>
<script setup>
import { ref, onMounted } from "vue";

const emailHref = ref("");
const emailText = ref("");
const phoneHref = ref("");
const phoneText = ref("");

onMounted(() => {
    const user = "korbitschl";
    const domain = "gmail.com";
    emailHref.value = `mailto:${user}@${domain}`;
    emailText.value = `${user}@${domain}`;

    phoneHref.value = "tel:+436601401425";
    phoneText.value = "+43 660 14 0 14 25";
});
</script>