<template>
    <PublicLayout>
        <Container className="mt-9">
            <div className="max-w-2xl">
                <h1 className="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">
                    Software Engineer, Gamer, Plant Lover and helping hand.
                </h1>
                <p className="mt-6 text-base text-zinc-600 dark:text-zinc-400">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
                <div className="mt-6 flex gap-6">
                    <!-- <SocialLink href="#" aria-label="Follow on X" icon={XIcon} />
                    <SocialLink href="#" aria-label="Follow on Instagram" icon={InstagramIcon} />
                    <SocialLink href="#" aria-label="Follow on GitHub" icon={GitHubIcon} />
                    <SocialLink href="#" aria-label="Follow on LinkedIn" icon={LinkedInIcon} /> -->
                </div>
            </div>
        </Container>
    </PublicLayout>
</template>
<script setup>
import Container from '@/Components/Container.vue';
import PublicLayout from '@/Layouts/Public/PublicLayout.vue';

</script>