<template>
    <li class="flex mt-8 border-t border-zinc-300 pt-8 dark:border-zinc-700/40">
        <a :href="phoneHref"
            class="group flex text-sm font-medium text-brand-headline transition hover:text-brand dark:text-zinc-200 dark:hover:text-brand">
            <i class="text-2xl fa-solid fa-phone h-6 w-6 flex-none transition group-hover:fill-brand"></i>
            <span class="ml-4">{{ phoneText }}</span>
        </a>
    </li>
    <li class="flex mt-4">
        <a :href="emailHref"
            class="group flex text-sm font-medium text-brand-headline transition hover:text-brand dark:text-zinc-200 dark:hover:text-brand">
            <i class="text-2xl fa-solid fa-envelope h-6 w-6 flex-none transition group-hover:fill-brand"></i>
            <span class="ml-4">{{ emailText }}</span>
        </a>
    </li>
</template>
<script setup>
import contact from "@/contact.js"

const emailHref = `mailto:${contact.email}`;
const emailText = contact.email;
const phoneHref = `tel:${contact.phone}`;
const phoneText = contact.phoneText;
</script>