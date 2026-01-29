<template>
  <Link
    href="/"
    aria-label="Home"
    :class="['pointer-events-auto']"
    v-bind="props"
  >
    <img
      src="/images/me-new.jpg"
      alt=""
      :sizes="large ? '4rem' : '2.25rem'"
      :class="[
        'rounded-full bg-zinc-100 object-cover dark:bg-zinc-800',
        large ? 'h-36 w-36' : 'h-9 w-9'
      ]"
      priority
    />
  </Link>
</template>

<script setup>
const { large = false, ... props} = defineProps(['large'])
</script>