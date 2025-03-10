<template>
    <PublicLayout title="Home">
      <Container class="mt-9">
        <div class="max-w-2xl relative z-10">
          <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">
            Software Engineer, Gamer, Plant Lover and helping hand.
          </h1>
          <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
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