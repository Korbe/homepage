<template>
    <header class="pointer-events-none relative z-50 flex flex-none flex-col"
        :style="{ height: headerHeight, marginBottom: headerMarginBottom }">
        <div ref="avatarRef" v-if="isHomePage" class="order-last mt-[calc(--spacing(16)-(--spacing(3)))]"></div>
        <Container class="top-0 order-last -mb-3 pt-3" :style="{ position: headerPosition }">
            <div class="top-[var(--avatar-top,--spacing(3))] w-full" :style="{ position: headerInnerPosition }">
                <div class="relative">


                    <div class="h-10 w-10 rounded-full bg-white/90 p-0.5 ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:ring-white/10 absolute top-3 left-0 origin-left transition-opacity"
                        :style="{
                            opacity: avatarBorderOpacity,
                            transform: avatarBorderTransform
                        }" />
                    <Link href="/" aria-label="Home" :style="{ transform: 'var(--avatar-image-transform)' }"
                        class="block h-16 w-16 origin-left pointer-events-auto">
                    <img src="/images/me.jpg" alt=""
                        class="h-16 w-16 rounded-full bg-zinc-100 object-cover dark:bg-zinc-800" />
                    </Link>


                </div>
            </div>
        </Container>
        <div ref="headerRef" class="top-0 z-10 h-16 pt-6" :style="{ position: headerPosition }">
            <Container class="top-[var(--header-top,--spacing(6))] w-full" :style="{ position: headerInnerPosition }">
                <div class="relative flex gap-4">
                    <div class="flex flex-1">


                        <div v-if="!isHomePage">
                            <div class="h-10 w-10 rounded-full bg-white/90 p-0.5 ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:ring-white/10 absolute top-3 left-0 origin-left transition-opacity"
                                :style="{
                                    opacity: avatarBorderOpacity,
                                    transform: avatarBorderTransform
                                }" />
                            <Link href="/" aria-label="Home" :style="{ transform: 'var(--avatar-image-transform)' }"
                                class="block h-16 w-16 origin-left pointer-events-auto">
                            <img src="/images/me.jpg" alt=""
                                class="h-16 w-16 rounded-full bg-zinc-100 object-cover dark:bg-zinc-800" />
                            </Link>
                        </div>


                    </div>
                    <div class="flex flex-1 justify-end md:justify-center">
                        <MobileNavigation />
                        <DesktopNavigation />
                    </div>
                    <div class="flex justify-end md:flex-1">
                        <div class="pointer-events-auto">
                            <ThemeToggle />
                        </div>
                    </div>
                </div>
            </Container>
        </div>
    </header>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';
import Container from '@/Components/Container.vue';
import { Link } from '@inertiajs/vue3';
import MobileNavigation from './MobileNavigation.vue';
import DesktopNavigation from './DesktopNavigation.vue';
import ThemeToggle from './ThemeToggle.vue';

const isHomePage = computed(() => window.location.pathname === '/')
const headerRef = ref(null);
const avatarRef = ref(null);
const headerHeight = ref('var(--header-height)');
const headerMarginBottom = ref('var(--header-mb)');
const headerPosition = ref('sticky');
const headerInnerPosition = ref('relative');
const avatarImageTransform = ref('scale(1)');
const avatarBorderTransform = ref('scale(1)');
const avatarBorderOpacity = ref('0');

const props = defineProps({
    large: { type: Boolean, default: false },
})




const computedAvatarClass = computed(() => [
    '',
    '',
])

const computedAvatarImageClass = computed(() => [
    'h-16 w-16 rounded-full bg-zinc-100 object-cover dark:bg-zinc-800',
])

const updateStyles = () => {
    // Implement scroll and resize behavior similar to React useEffect logic
};

onMounted(() => {
    updateStyles();
    window.addEventListener('scroll', updateStyles, { passive: true });
    window.addEventListener('resize', updateStyles);
});

onUnmounted(() => {
    window.removeEventListener('scroll', updateStyles);
    window.removeEventListener('resize', updateStyles);
});
</script>