<template>

    <Avatar large="true" class="block mb-5"/>

    <div class="max-w-2xl relative">
        <h1 class="text-4xl font-bold tracking-tigh sm:text-5xl text-brand-headline dark:text-brand-headline-dark">
            Ing. Korbitsch<br>IT-Dienstleistungen
        </h1>
        <p class="my-6 text-lg text-brand-text dark:text-brand-text-dark">
            Hallo, ich bin Ing. Lukas Korbitsch. Wenn dein PC, Laptop oder Smartphone nicht mehr so will wie du - kein
            Problem!
            Ich komme zu dir nach Hause und kümmere mich persönlich darum, dass wieder alles läuft.
            Schnell, verständlich erklärt und ohne Fachchinesisch.
        </p>
    </div>

    <div class="mt-5 flex flex-wrap gap-2">
        <ContactLinksHorizontal />
    </div>
</template>
<script setup>
import Avatar from './Avatar.vue';
import ContactLinksHorizontal from '@/Components/ContactLinksHorizontal.vue';
</script>