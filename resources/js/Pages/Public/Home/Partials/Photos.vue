<template>
  <div class="relative my-16 sm:my-20 h-60 md:h-96 w-full overflow-hidden">
    <div ref="scrollContainer" class="h-full w-full overflow-x-auto scrollbar-hide snap-x snap-mandatory scroll-smooth">
      <div class="flex h-60 md:h-96 w-fit mx-auto">
        <!-- Unsichtbares Padding-Element für Zentrierung -->
        <div class="flex-none w-[calc(50%-11rem)] sm:w-[calc(50%-18rem)]"></div>

        <div v-for="(image, imageIndex) in images" :key="image.src" :class="[ 
            'relative aspect-9/10 flex-none overflow-hidden rounded-xl w-44 sm:w-72 sm:rounded-2xl dark:bg-zinc-800 hover:rotate-0 transition-transform duration-300 snap-center mx-2.5 sm:mx-4', 
            rotations[imageIndex % rotations.length]
          ]">
          <img :src="image.src" alt="" sizes="(min-width: 640px) 18rem, 11rem" class="h-full w-full object-cover" />
        </div>

        <!-- Unsichtbares Padding-Element für Zentrierung -->
        <div class="flex-none w-[calc(50%-11rem)] sm:w-[calc(50%-18rem)]"></div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, nextTick } from 'vue';

const scrollContainer = ref(null);
const rotations = ['rotate-2', '-rotate-2', 'rotate-2', 'rotate-2', '-rotate-2'];
const images = [
  { src: '/images/gaming.jpg' },
  { src: '/images/plant.jpg' },
  { src: '/images/code.jpg' },
  { src: '/images/handshake.jpg' },
  { src: '/images/fitness.jpg' },
];
onMounted(() => {
  nextTick(() => {
    if (scrollContainer.value) {
      const imageElements = [...scrollContainer.value.children[0].children].filter(el => el.tagName === 'DIV' && el.classList.contains('relative'));
      
      const thirdImage = imageElements[2];
      
      if (thirdImage) {
        const containerWidth = scrollContainer.value.clientWidth;
        const imageCenter = thirdImage.offsetLeft + thirdImage.clientWidth / 2;
        const scrollPosition = imageCenter - containerWidth / 2;

        scrollContainer.value.scrollTo({
          left: scrollPosition,
          behavior: 'smooth',
        });
      }
    }
  });
});
</script>

<style scoped>
/* Versteckt die Scrollbar, aber behält die Scrollfunktionalität */
.scrollbar-hide {
  -ms-overflow-style: none;  /* IE und Edge */
  scrollbar-width: none;      /* Firefox */
}

.scrollbar-hide::-webkit-scrollbar {
  display: none;  /* Chrome, Safari und Opera */
}
</style>
