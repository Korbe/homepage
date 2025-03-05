<template>
    <div class="flex h-full bg-zinc-50 dark:bg-black">
        <div className="flex w-full">

            <div className="fixed inset-0 flex justify-center sm:px-8">
                <div className="flex w-full max-w-7xl lg:px-8">
                    <div className="w-full bg-white ring-1 ring-zinc-100 dark:bg-zinc-900 dark:ring-zinc-300/20"></div>
                </div>
            </div>
            <div className="relative flex w-full flex-col">
                <PublicHeader />
                <main className="flex-auto">
                    <slot></slot>
                </main>
                <PublicFooter />
            </div>

        </div>
    </div>
</template>
<script setup>
import PublicFooter from './PublicFooter.vue';
import PublicHeader from './PublicHeader.vue';

</script>