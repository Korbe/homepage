<template>
    <div class="max-w-2xl relative">
        <h1 class="text-4xl font-bold tracking-tigh sm:text-5xl text-brand-headline dark:text-brand-headline-dark">
            Software Engineer, Plant Lover and Helping Hand.
        </h1>
        <p class="my-6 text-lg text-brand-text dark:text-brand-text-dark">
            Hallo, ich bin Ing. Lukas Korbitsch aus Villach und entwickle maßgeschneiderte Webapps. Schon als Kind
            fasziniert von
            Computern, entdeckte ich meine Leidenschaft fürs Programmieren an der HTL Villach. Neben der
            Softwareentwicklung helfe ich bei technischen Fragen und genieße in meiner Freizeit das Hobby Gärtnern,
            Computerspielen sowie
            Outdoor-Aktivitäten.
        </p>
    </div>

    <div class="mt-5 flex gap-2">
        <VButton :href="route('public.about')">
            Über mich
        </VButton>
        <VButton :href="route('public.projects')">
            Projekte
        </VButton>
    </div>
</template>
<script setup>
import VButton from '@/Components/VButton.vue';

</script>