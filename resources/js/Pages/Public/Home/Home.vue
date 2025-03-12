<template>
  <PublicLayout title="Home">
    <Container class="mt-16">


      <Welcome />
    </Container>


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