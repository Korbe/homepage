<template>
  <component :is="isLink ? 'Link' : 'button'"
    class="bg-white/90 text-zinc-800 font-medium shadow-lg shadow-zinc-800/5 ring-1  ring-zinc-900/5 hover:text-teal-500 dark:hover:text-teal-400 dark:hover:bg-zinc-800 border dark:text-zinc-200 dark:dark:bg-zinc-800/50 border-transparent py-2 px-5 rounded-3xl"
    :href="props.href">
    <slot></slot>
  </component>
</template>

<script setup>
import { computed, defineProps } from 'vue'

// Definiere die Props
const props = defineProps({
  href: {
    type: String,
    default: undefined,
  },
})

const isLink = computed(() => typeof props.href !== 'undefined')
</script>