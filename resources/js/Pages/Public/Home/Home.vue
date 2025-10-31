<template>
  <PublicLayout title="Home">
    <Container class="mt-16">

      <Welcome />

      <Service />

      <Faqs />

      <Cta />

    </Container>

  </PublicLayout>
</template>

<script setup>
import Container from "@/Components/Container.vue";
import PublicLayout from "@/Layouts/Public/PublicLayout.vue";
import Cta from "./Partials/Cta.vue";
import Welcome from "./Partials/Welcome.vue";
import Faqs from "./Partials/Faqs.vue";
import Service from "./Partials/Service.vue";
import Webapps from "./Partials/Webapps.vue";
</script>