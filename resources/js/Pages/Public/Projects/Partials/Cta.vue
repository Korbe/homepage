<template>
    <div class="text-brand-text dark:dark:text-brand-headline-dark text-center mt-20">
        <img src="/images/logo.png" alt="Logo" class="mx-auto h-24 w-auto mb-6" />
        <h2 class="text-2xl font-bold tracking-tight text-brand-headline sm:text-3xl dark:text-brand-headline-dark my-3">
            Sie wollen auch Ihr Projekt hier sehen?
        </h2>
        <p class="text-lg">
            Ich helfe Ihnen gerne Ihr digitales Projekt zum Leben zu erwecken.
        </p>
        <p class="text-lg">
            Von Websites bis hin zu individuellen Webanwendungen
        </p>

        <ContactLinks />
        
    </div>
</template>
<script setup>
import ContactLinks from '@/Components/ContactLinksHorizontal.vue';
</script>