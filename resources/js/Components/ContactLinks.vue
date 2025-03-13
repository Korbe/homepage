<template>
    <div class="flex justify-center items-center gap-5 py-5">
        <div class="flex ">
            <a :href="emailHref"
                class="group flex text-sm font-medium text-zinc-800 transition hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500">
                <i
                    class="text-2xl fa-solid fa-envelope h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-teal-500"></i>
                <span class="ml-4">{{ emailText }}</span>
            </a>
        </div>
        <div class="flex">
            <a :href="phoneHref"
                class="group flex text-sm font-medium text-zinc-800 transition hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500">
                <i
                    class="text-2xl fa-solid fa-phone h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-teal-500"></i>
                <span class="ml-4">{{ phoneText }}</span>
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