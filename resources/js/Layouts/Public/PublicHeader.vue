<template>
    <div>
        <header
            class="pointer-events-none relative z-50 flex flex-none flex-col"
            :style="{ height: headerHeight, marginBottom: headerMb }"
        >
            <div v-if="isHomePage">
                <div
                    ref="avatarRef"
                    class="order-last mt-[calc(var(--spacing(16) - var(--spacing(3)))]"
                />
                <Container
                    class="top-0 order-last -mb-3 pt-3"
                    :style="{ position: headerPosition }"
                >
                    <div
                        class="-top-[var(--avatar-top,var(--spacing(3)))] w-full"
                        :style="{ position: headerInnerPosition }"
                    >
                        <div class="relative">
                            <AvatarContainer
                                class="absolute top-3 left-0 origin-left transition-opacity"
                                :style="{
                                    opacity: avatarBorderOpacity,
                                    transform: avatarBorderTransform,
                                }"
                            />
                            <Avatar
                                large
                                class="block h-16 w-16 origin-left"
                                :style="{ transform: avatarImageTransform }"
                            />
                        </div>
                    </div>
                </Container>
            </div>

            <div
                ref="headerRef"
                class="top-0 z-10 h-16 pt-6"
                :style="{ position: headerPosition }"
            >
                <Container
                    class="top-[var(--header-top,var(--spacing(6)))] w-full"
                    :style="{ position: headerInnerPosition }"
                >
                    <div class="relative flex gap-4">
                        <div class="flex flex-1">
                            <AvatarContainer v-if="!isHomePage">
                                <Avatar />
                            </AvatarContainer>
                        </div>
                        <div class="flex flex-1 justify-end md:justify-center">
                            <MobileNavigation
                                class="pointer-events-auto md:hidden"
                            />
                            <DesktopNavigation
                                class="pointer-events-auto hidden md:block"
                            />
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

        <div
            v-if="isHomePage"
            class="flex-none"
            :style="{ height: contentOffset }"
        />
    </div>
</template>

<script setup>
import { ref, onMounted, computed } from "vue";
import AvatarContainer from "./AvatarContainer.vue";
import MobileNavigation from "./MobileNavigation.vue";
import DesktopNavigation from "./DesktopNavigation.vue";
import ThemeToggle from "./ThemeToggle.vue";
import Container from "@/Components/Container.vue";
import Avatar from "./Avatar.vue";

const headerRef = ref(null);
const avatarRef = ref(null);
const isInitial = ref(true);

const isHomePage = computed(() => window.location.href === window.location.origin + "/");

const headerHeight = ref("var(--header-height)");
const headerMb = ref("var(--header-mb)");
const headerPosition = ref("var(--header-position)");
const headerInnerPosition = ref("var(--header-inner-position)");
const avatarBorderOpacity = ref("var(--avatar-border-opacity, 0)");
const avatarBorderTransform = ref("var(--avatar-border-transform)");
const avatarImageTransform = ref("var(--avatar-image-transform)");
const contentOffset = ref("var(--content-offset)");

function clamp(number, a, b) {
    let min = Math.min(a, b);
    let max = Math.max(a, b);
    return Math.min(Math.max(number, min), max);
}

function setProperty(property, value) {
    document.documentElement.style.setProperty(property, value);
}

function removeProperty(property) {
    document.documentElement.style.removeProperty(property);
}

function updateHeaderStyles() {
    if (!headerRef.value) return;

    const { top, height } = headerRef.value.getBoundingClientRect();
    const scrollY = clamp(
        window.scrollY,
        0,
        document.body.scrollHeight - window.innerHeight
    );

    if (isInitial.value) {
        setProperty("--header-position", "sticky");
    }

    setProperty("--content-offset", `${avatarRef.value?.offsetTop ?? 0}px`);

    if (isInitial.value || scrollY < (avatarRef.value?.offsetTop ?? 0)) {
        setProperty(
            "--header-height",
            `${(avatarRef.value?.offsetTop ?? 0) + height}px`
        );
        setProperty("--header-mb", `${-(avatarRef.value?.offsetTop ?? 0)}px`);
    } else if (top + height < -64) {
        const offset = Math.max(height, scrollY - 64);
        setProperty("--header-height", `${offset}px`);
        setProperty("--header-mb", `${height - offset}px`);
    } else if (top === 0) {
        setProperty("--header-height", `${scrollY + height}px`);
        setProperty("--header-mb", `${-scrollY}px`);
    }

    if (
        top === 0 &&
        scrollY > 0 &&
        scrollY >= (avatarRef.value?.offsetTop ?? 0)
    ) {
        setProperty("--header-inner-position", "fixed");
        removeProperty("--header-top");
        removeProperty("--avatar-top");
    } else {
        removeProperty("--header-inner-position");
        setProperty("--header-top", "0px");
        setProperty("--avatar-top", "0px");
    }
}

function updateAvatarStyles() {
    if (!isHomePage.value) return;

    const fromScale = 1;
    const toScale = 36 / 64;
    const fromX = 0;
    const toX = 2 / 16;

    const scrollY = (avatarRef.value?.offsetTop ?? 0) - window.scrollY;

    let scale =
        (scrollY * (fromScale - toScale)) / (avatarRef.value?.offsetTop ?? 0) +
        toScale;
    scale = clamp(scale, fromScale, toScale);

    let x = (scrollY * (fromX - toX)) / (avatarRef.value?.offsetTop ?? 0) + toX;
    x = clamp(x, fromX, toX);

    setProperty(
        "--avatar-image-transform",
        `translate3d(${x}rem, 0, 0) scale(${scale})`
    );

    const borderScale = 1 / (toScale / scale);
    const borderX = (-toX + x) * borderScale;
    const borderTransform = `translate3d(${borderX}rem, 0, 0) scale(${borderScale})`;

    setProperty("--avatar-border-transform", borderTransform);
    setProperty("--avatar-border-opacity", scale === toScale ? "1" : "0");
}

function updateStyles() {
    updateHeaderStyles();
    updateAvatarStyles();
    isInitial.value = false;
}

onMounted(() => {
    updateStyles();
    window.addEventListener("scroll", updateStyles, { passive: true });
    window.addEventListener("resize", updateStyles);

    return () => {
        window.removeEventListener("scroll", updateStyles);
        window.removeEventListener("resize", updateStyles);
    };
});
</script>

<style scoped>
/* Add any scoped CSS specific to this component */
</style>
