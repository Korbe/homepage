<template>
  <component :is="isLink ? 'Link' : 'button'" :class="[buttonClass, props.className]" :href="props.href">
    <slot></slot>
  </component>
</template>

<script setup>
import { computed, defineProps } from 'vue'

// Definiere die Props
const props = defineProps({
  className: {
    type: String,
    default: '',
  },
  href: {
    type: String,
    default: undefined,
  },
})

const buttonClass = computed(() => {
  let buttonClass = 'bg-zinc-100 hover:bg-zinc-200 text-zinc-700 font-medium hover:text-teal-500 dark:hover:text-teal-400 dark:hover:bg-zinc-800 border dark:text-zinc-200 dark:dark:bg-zinc-800/50 border-transparent py-2 px-5 rounded-3xl'
  let customClass = props.className || ''

  return `${customClass} ${buttonClass}`.trim()
})

const isLink = computed(() => typeof props.href !== 'undefined')
</script>