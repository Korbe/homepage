<template>
  <div v-bind="{ class: ['sm:px-8', props.class], style }">
    <div class="mx-auto w-full max-w-7xl lg:px-8">
      <div class="relative px-4 sm:px-8 lg:px-12">
        <div class="mx-auto max-w-2xl lg:max-w-5xl">
          <slot></slot>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
// Props definieren
const props = defineProps({
  class: {
    type: String,
  },
  style: {
    type: Object,
  },
});
</script>
