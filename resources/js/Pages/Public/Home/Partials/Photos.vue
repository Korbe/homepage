<template>
  <div class="relative my-16 sm:my-20 h-60 md:h-96">
    <div class="-my-4 flex justify-center gap-5 overflow-hidden py-4 sm:gap-8 absolute left-1/2 transform -translate-x-1/2 h-60 md:h-96">
      <div
        v-for="(image, imageIndex) in images"
        :key="image.src"
        :class="[
          'relative aspect-9/10 w-44 flex-none overflow-hidden rounded-xl sm:w-72 sm:rounded-2xl dark:bg-zinc-800 ',
          rotations[imageIndex % rotations.length]
        ]"
      >
        <img
          :src="image.src"
          alt=""
          sizes="(min-width: 640px) 18rem, 11rem"
          class="h-full w-full object-cover"
        />
      </div>
    </div>
  </div>
</template>

<script setup>
const rotations = ['rotate-2', '-rotate-2', 'rotate-2', 'rotate-2', '-rotate-2'];
const images = [
  { src: 'https://images.unsplash.com/photo-1509198397868-475647b2a1e5?q=80&w=2747&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' },
  { src: 'https://images.pexels.com/photos/213727/pexels-photo-213727.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1' },
  { src: 'https://images.pexels.com/photos/546819/pexels-photo-546819.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1' },
  { src: 'https://images.unsplash.com/photo-1582578598774-a377d4b32223?q=80&w=2671&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' },
  { src: 'https://images.pexels.com/photos/260352/pexels-photo-260352.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1' },
];
</script>