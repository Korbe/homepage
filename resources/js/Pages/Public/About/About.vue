<template>
    <PublicLayout title="Über mich">
        <Container class="mt-16 sm:mt-32">
            <div class="grid grid-cols-1 gap-y-16 lg:grid-cols-[2fr_1fr] lg:grid-rows-[auto_1fr] lg:gap-y-12">
                <div class="lg:pl-4">
                    <div class="max-w-xs px-2.5 lg:max-w-none">
                        <img src="/images/me.jpg" alt="" sizes="(min-width: 1024px) 32rem, 20rem"
                            class="aspect-square rotate-3 rounded-2xl object-cover" />
                    </div>
                </div>
                <div class="lg:order-first lg:row-span-2">
                    <h1
                        class="text-4xl font-bold tracking-tight text-brand-headline sm:text-5xl dark:text-brand-headline-dark">
                        Ich bin Ing. Lukas Korbitsch aus Villach und bringe Code zum Leben.
                    </h1>
                    <div class="mt-6 space-y-7 text-lg text-brand-text dark:text-brand-text-dark">
                        <p>
                            Mein erstes Computerspiel, das mich als Kind nicht mehr losließ, war <b>Anno 1701</b>. Schon
                            damals war ich fasziniert von Computern, auch wenn ich noch nicht wusste, welchen Weg ich
                            später einschlagen würde.
                        </p>

                        <p>
                            Während meiner Schulzeit an der
                            <a class="underline" target="_blank" href="https://www.htl-villach.at/"><b>HTL
                                    Villach</b></a>
                            entdeckte ich meine Leidenschaft für das Programmieren. Heute liebe ich es, Software zu
                            entwickeln – auch wenn es manchmal herausfordernd sein kann. Doch genau das reizt mich:
                            Dinge zu automatisieren, Prozesse zum Leben zu erwecken und kreative Lösungen zu finden.
                        </p>

                        <p>
                            Beruflich bin ich Angestellter bei der Firma
                            <a class="underline" target="_blank" href="https://software-cube.at"><b>SoftwareCUBE</b></a>
                            und arbeite für
                            <a class="underline" target="_blank" href="https://www.infineon.com/cms/de/">
                                <b>Infineon Technologies</b>
                            </a>
                            an diversen Projekten in der Hochautomatisierung.
                        </p>

                        <p>
                            Neben meiner Tätigkeit in der Softwareentwicklung betreibe ich mit <b>Korbitsch.at</b>
                            ein IT-Dienstleistungsunternehmen, über das ich Privatpersonen bei technischen Anliegen
                            unterstütze.
                        </p>

                        <p>
                            Darüber hinaus bin ich Entwickler und Gründer von <a class="underline" target="_blank" href="https://www.petrilog.com"><b>Petrilog.com</b></a> ein österreichisches Anglertagebuch,
                            mit dem Angler ihre Fänge digital dokumentieren und festhalten können.
                        </p>

                        <p>
                            In meiner Freizeit widme ich mich gerne meinen weiteren Leidenschaften:
                            <b>Programmieren</b> (wenig überraschend 😉), <b>Computerspielen</b> und
                            <b>Outdoor-Aktivitäten</b>. Auch mein Hund kommt dabei natürlich nicht zu kurz.
                        </p>

                        <p>
                            Zum Ausgleich zum vielen Sitzen gehe ich regelmäßig ins
                            <b>Fitnessstudio</b>. Außerdem bin ich gerne <b>draußen in der Natur</b>, sei es beim
                            <b>Camping in meiner Hängematte</b> oder bei Spaziergängen an der frischen Luft.
                        </p>

                        <p>
                            Zu erwähnen ist auch mein <b>ehrenamtliches Engagement</b>:
                            Ich bin Mitglied der <a class="underline" target="_blank" href="https://www.facebook.com/freiwilligefeuerwehrvoelkendorf"><b>Freiwilligen Feuerwehr Völkendorf</b></a>.
                        </p>

                        <p>
                            Ein besonders wichtiger Teil meines Lebens ist meine <b>wundervolle Freundin</b>, die mich
                            in allem unterstützt, was ich tue, mir Rückhalt gibt und mein Leben bereichert.
                        </p>

                        <div class="border w-10 my-10 mx-auto border-brand-text dark:border-brand-text-dark"></div>

                        <blockquote class="text-center italic font-bold">
                            <p>Wenn ich etwas noch nicht kann, dann lerne ich es - in
                                Zeiten von Google und ChatGPT gibt es kaum ein Problem, das sich nicht lösen lässt. Wer
                                nicht lernt bleibt stehen, und wer
                                stehen bleibt hört auf
                                gut zu sein.
                            </p>
                        </blockquote>
                    </div>
                </div>
                <div class="lg:pl-20">
                    <ul role="list">
                        <SocialLinks />
                        <ContactLinksVertical />
                        <VButton class="w-full mt-5" @click="downloadVCF">Kontakt speichern</VButton>
                        <VButton class="w-full mt-5" @click="isOpen = true">Download CV</VButton>
                        <EmailCVModal v-if="isOpen" :isOpen="isOpen" @update:isOpen="isOpen = $event" />
                    </ul>
                </div>
            </div>
        </Container>
    </PublicLayout>
</template>
<script setup>
import Container from '@/Components/Container.vue';
import PublicLayout from '@/Layouts/Public/PublicLayout.vue';
import SocialLinks from './Partials/SocialLinks.vue';
import ContactLinksVertical from '../../../Components/ContactLinksVertical.vue';
import VButton from '@/Components/VButton.vue';
import EmailCVModal from './Partials/EmailCVModal.vue';
import { ref } from 'vue';
import { downloadVCF } from '@/vcard';
import Photos from '../Home/Partials/Photos.vue';


const isOpen = ref(false);
</script>