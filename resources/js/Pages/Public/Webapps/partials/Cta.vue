<template>
    <div class="text-center mt-20">
        <img src="/images/logo.png" alt="Logo" class="mx-auto h-24 w-auto mb-6" />
        <h2 class="text-2xl font-bold tracking-tight text-brand-headline sm:text-3xl dark:text-brand-headline-dark my-3">
            Rufen Sie an oder schreiben Sie mir.<br>Ich helfe Ihnen gerne weiter.
        </h2>
        <p class="text-lg text-brand-text dark:text-brand-text-dark">
            Ihre WebApp wartet - ich bringe sie online!
        </p>
        
        <ContactLinksHorizontal />

    </div>
</template>
<script setup>
import ContactLinksHorizontal from '@/Components/ContactLinksHorizontal.vue';

</script>