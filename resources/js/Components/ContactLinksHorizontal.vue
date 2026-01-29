<template>
    <div class="flex justify-center items-center gap-5 py-5">
        <div class="flex">
            <a :href="phoneHref"
                class="group flex text-sm font-medium text-brand-headline transition hover:text-brand dark:text-brand-headline-dark">
                <i class="text-2xl fa-solid fa-phone h-6 w-6 flex-none transition text-brand group-hover:text-brand"></i>
                <span class="ml-4">{{ phoneText }}</span>
            </a>
        </div>
        <div class="flex ">
            <a :href="emailHref"
                class="group flex text-sm font-medium text-brand-headline transition hover:text-brand dark:text-brand-headline-dark">
                <i class="text-2xl fa-solid fa-envelope h-6 w-6 flex-none transition text-brand group-hover:text-brand"></i>
                <span class="ml-4">{{ emailText }}</span>
            </a>
        </div>
    </div>
</template>
<script setup>
import contact from "@/contact.js"

const emailHref = `mailto:${contact.email}`;
const emailText = contact.email;
const phoneHref = `tel:${contact.phone}`;
const phoneText = contact.phoneText;
</script>