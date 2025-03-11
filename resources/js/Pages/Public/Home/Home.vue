<template>
  <PublicLayout title="Home">
    <Container class="mt-16">
      <div class="max-w-2xl relative z-10">
        <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">
          Software Engineer, Plant Lover and Helping Hand.
        </h1>
        <p class="mt-6 text-lg text-zinc-600 dark:text-zinc-400">
          Ich bin Ing. Lukas Korbitsch aus Villach und entwickle maßgeschneiderte Webapps. Schon als Kind fasziniert von
          Computern, entdeckte ich meine Leidenschaft fürs Programmieren an der HTL Villach. Neben der
          Softwareentwicklung helfe ich bei technischen Fragen und genieße in meiner Freizeit das Hobby Gärtnern, Computerspielen sowie
          Outdoor-Aktivitäten.
        </p>
        <SkillsBadge />
      </div>

      <Photos />

    </Container>
  </PublicLayout>
</template>

<script setup>
import Container from "@/Components/Container.vue";
import PublicLayout from "@/Layouts/Public/PublicLayout.vue";
import Photos from "./Partials/Photos.vue";
import SkillsBadge from "./Partials/SkillsBadge.vue";
</script>