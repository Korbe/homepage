<template>
  <li v-for="(link, index) in socialLinks" :key="index" class="flex mt-4 first:mt-0">
    <a :href="link.href" target="_blank" rel="noopener noreferrer"
      class="group flex text-sm font-medium text-brand-headline transition hover:text-brand dark:text-zinc-200 dark:hover:text-brand">
      <i :class="['text-2xl', link.icon, 'h-6 w-6 flex-none transition group-hover:fill-brand']"></i>
      <span class="ml-4">{{ link.text }}</span>
    </a>
  </li>
</template>

<script setup>
const socialLinks = [
  { href: "https://github.com/Korbe", icon: "fab fa-github", text: "Github" },
  { href: "https://www.linkedin.com/in/lukas-korbitsch", icon: "fab fa-linkedin", text: "LinkedIn" },
  { href: "https://www.instagram.com/k0rbe", icon: "fab fa-instagram", text: "Instagram" },
];
</script>