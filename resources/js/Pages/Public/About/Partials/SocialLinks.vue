<template>
  <li v-for="(link, index) in socialLinks" :key="index" class="flex mt-4 first:mt-0">
    <a :href="link.href" target="_blank" rel="noopener noreferrer"
      class="group flex text-sm font-medium text-zinc-800 transition hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500">
      <i :class="['text-2xl', link.icon, 'h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-teal-500']"></i>
      <span class="ml-4">{{ link.text }}</span>
    </a>
  </li>
</template>

<script setup>
const socialLinks = [
  { href: "https://github.com/Korbe", icon: "fab fa-github", text: "Github" },
  { href: "https://www.instagram.com/k0rbe", icon: "fab fa-instagram", text: "Instagram" },
  { href: "https://www.linkedin.com/in/lukas-korbitsch", icon: "fab fa-linkedin", text: "LinkedIn" },
];
</script>