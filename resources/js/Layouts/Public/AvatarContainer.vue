<template>
    <div
      :class="[
        className,
        'h-10 w-10 rounded-full bg-white/90 p-0.5 ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:ring-white/10'
      ]"
      v-bind="props"
    >
      <slot></slot>
    </div>
  </template>
  
  <script setup>
  import { defineProps } from 'vue'
  
  const { className, ...props } = defineProps(['className'])
  </script>