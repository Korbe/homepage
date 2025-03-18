<template>
    <div class="max-w-2xl relative">
        <h1 class="text-4xl font-bold tracking-tigh sm:text-5xl text-brand-headline dark:text-brand-headline-dark">
            Software Engineer, Plant Lover and Helping Hand.
        </h1>
        <p class="my-6 text-lg text-brand-text dark:text-brand-text-dark">
            Hallo, ich bin Ing. Korbitsch Lukas, Ihr zuverlässiger IT-Dienstleister für WebApps, PC- und Smartphone-Support sowie individuelle
            Gaming-PCs. Egal, ob es um Softwareprobleme, Hardwarezusammenstellungen oder digitale Lösungen geht - ich
            finde für Sie die passende Lösung.
        </p>
    </div>

    <div class="mt-5 flex flex-wrap gap-2">
        <VButton :href="route('public.about')">
            Über mich
        </VButton>
        <VButton :href="route('public.projects')">
            Projekte
        </VButton>
        <VButton @click="downloadVCF">Kontakt speichern</VButton>
    </div>
</template>
<script setup>
import VButton from '@/Components/VButton.vue';
import { downloadVCF } from '@/vcard';

</script>