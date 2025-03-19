<template>
    <header class="pointer-events-none relative z-10 flex flex-none flex-col"
        style="height:var(--header-height);margin-bottom:var(--header-mb)">
        <div v-if="isHomePage" class="order-last mt-[calc(--spacing(16)-(--spacing(3)))]"></div>
        <div v-if="isHomePage" ref="avatarRef" class="top-0 order-last -mb-3 pt-3">


            <Container style="position:var(--header-position)">

                <div class="top-(--avatar-top,--spacing(3)) w-full" style="position:var(--header-inner-position)">
                    <div class="relative">
                        <div class="absolute top-3 left-0 origin-left transition-opacity h-10 w-10 rounded-full bg-white/90 p-0.5 ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:ring-white/10"
                            style="opacity:var(--avatar-border-opacity, 0);transform:var(--avatar-border-transform)">
                        </div>
                        <Avatar large="true" class="block h-16 w-16 origin-left"
                            style="transform: var(--avatar-image-transform)" />

                    </div>
                </div>
            </Container>
        </div>
        <div ref="headerRef" class="top-0 z-10 h-16 pt-6" style="position:var(--header-position)">
            <Container class="top-(--header-top,--spacing(6)) w-full" style="position:var(--header-inner-position)">
                <div class="relative flex gap-4">
                    <div class="flex flex-1">

                        <div v-if="!isHomePage" class="">
                            <div
                                class="h-10 w-10 rounded-full bg-white/90 p-0.5 ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:ring-white/10">
                                <Avatar></Avatar>
                            </div>
                        </div>

                    </div>
                    <div class="flex flex-1 justify-end md:justify-center">
                        <MobileNavigation class="pointer-events-auto md:hidden" />
                        <DesktopNavigation class="pointer-events-auto hidden md:block" />
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
    <div v-if="isHomePage" class="flex-none" style="height:var(--content-offset)"></div>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import MobileNavigation from './MobileNavigation.vue'; 
import DesktopNavigation from './DesktopNavigation.vue'; 
import ThemeToggle from './ThemeToggle.vue'; 
import Avatar from './Avatar.vue';
import Container from '@/Components/Container.vue';

const isHomePage = ref(window.location.pathname === '/');
const headerRef = ref(null);
const avatarRef = ref(null);
const isInitial = ref(true);
let lastScrollY = 0;

const setProperty = (property, value) => {
    document.documentElement.style.setProperty(property, value);
};

const removeProperty = (property) => {
    document.documentElement.style.removeProperty(property);
};

const updateHeaderStyles = () => {

    if (!headerRef.value) return;

    const { top, height } = headerRef.value.getBoundingClientRect();
    const scrollY = document.getElementById("app").scrollY;

    if (scrollY === lastScrollY) return;
    lastScrollY = scrollY;

    const downDelay = avatarRef.value?.offsetTop || 0;
    const upDelay = 64;

    if (isInitial.value) {
        setProperty('--header-position', 'sticky');
    }

    setProperty('--content-offset', `${downDelay}px`);

    if (isInitial.value || scrollY < downDelay) {
        setProperty('--header-height', `${downDelay + height}px`);
        setProperty('--header-mb', `${-downDelay}px`);
    } else if (top + height < -upDelay) {
        const offset = Math.max(height, scrollY - upDelay);
        setProperty('--header-height', `${offset}px`);
        setProperty('--header-mb', `${height - offset}px`);
    } else if (top === 0) {
        setProperty('--header-height', `${scrollY + height}px`);
        setProperty('--header-mb', `${-scrollY}px`);
    }

    if (top === 0 && scrollY > 0 && scrollY >= downDelay) {
        setProperty('--header-inner-position', 'fixed');
        removeProperty('--header-top');
        removeProperty('--avatar-top');
    } else {
        removeProperty('--header-inner-position');
        setProperty('--header-top', '0px');
        setProperty('--avatar-top', '0px');
    }
};

const updateAvatarStyles = () => {
    if (!isHomePage.value || !avatarRef.value) return;

    const downDelay = avatarRef.value.offsetTop || 0; // Abstand vom Avatar zum oberen Rand
    const fromScale = 2; // Anfangsgröße des Avatars (größer)
    const toScale = 0.5;  // Endgröße des Avatars (kleiner)
    const fromX = 0; // Start-Translation in X
    const toX = 2 / 16; // End-Translation in X
    const scrollY = document.getElementById("app").scrollTop || 0; // Scroll-Position des Containers

    // Berechnung der Skalierung (vom Großen zum Kleinen)
    let scale = fromScale - (scrollY / downDelay) * (fromScale - toScale);

    // Begrenzung der Skalierung: Der Avatar soll nie kleiner als `toScale` werden
    scale = Math.max(scale, toScale);

    // Berechnung der X-Translation (Avatar bewegt sich in X-Richtung)
    let x = (scrollY * (fromX - toX)) / downDelay + toX;
    x = Math.min(Math.max(x, toX), fromX); // Begrenzen der X-Translation

    // Anwenden der Transformation auf das Avatar-Element
    setProperty(
        '--avatar-image-transform',
        `translate3d(${x}rem, 0, 0) scale(${scale})` // Avatar wird skaliert und verschoben
    );

    // Berechnung der Border-Transformation
    const borderScale = 1 / (fromScale / scale);
    const borderX = (-toX + x) * borderScale;
    const borderTransform = `translate3d(${borderX}rem, 0, 0) scale(${borderScale})`;

    // Anwenden der Border-Transformation
    setProperty('--avatar-border-transform', borderTransform);

    // Anpassung der Opazität der Border basierend auf der Skalierung
    setProperty('--avatar-border-opacity', scale === toScale ? '1' : '0');
};

const updateStyles = () => {
    requestAnimationFrame(() => {
        updateHeaderStyles();
        updateAvatarStyles();
        isInitial.value = false;
    });
};

onMounted(() => {
    updateStyles();
    document.getElementById("app").addEventListener('scroll', updateStyles);
    document.getElementById("app").addEventListener('resize', updateStyles);
});

onBeforeUnmount(() => {
    document.getElementById("app").removeEventListener('scroll', updateStyles);
    document.getElementById("app").removeEventListener('resize', updateStyles);
});
</script>