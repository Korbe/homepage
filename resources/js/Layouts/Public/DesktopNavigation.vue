<template>
  <nav class="pointer-events-auto hidden md:block">
    <ul
      class="flex rounded-full bg-white/90 px-3 text-sm font-medium text-zinc-800 ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10">
      <NavItem href="/about">About</NavItem>
      <NavItem href="/articles">Articles</NavItem>
      <NavItem href="/projects">Projects</NavItem>
      <NavItem href="/speaking">Speaking</NavItem>
      <NavItem href="/uses">Uses</NavItem>
    </ul>
  </nav>
</template>
<script setup>
import NavItem from './NavItem.vue';
</script>
