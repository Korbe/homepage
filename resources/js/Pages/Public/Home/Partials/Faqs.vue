<template>
    <div class="max-w-4xl py-12">
        <h2 class="text-4xl font-semibold tracking-tight text-brand-headline sm:text-3xl dark:text-brand-headline-dark">
            Auf Fragen
            gibt es Antworten</h2>
        <dl class="my-12 divide-y divide-gray-900/10">
            <Disclosure as="div" v-for="(faq, index) in faqs" :key="faq.question" class="py-6 first:pt-0 last:pb-0"
                :defaultOpen="index === 0" v-slot="{ open }">
                <dt>
                    <DisclosureButton
                        class="flex w-full items-start justify-between text-left text-brand-headline sm:text-3xl dark:text-brand-headline-dark">
                        <span class="cursor-pointer text-base/7 font-semibold">{{ faq.question }}</span>
                        <span class="ml-6 flex h-7 items-center">
                            <PlusIcon v-if="!open" class="cursor-pointer size-6" aria-hidden="true" />
                            <MinusIcon v-else class="cursor-pointer size-6" aria-hidden="true" />
                        </span>
                    </DisclosureButton>
                </dt>
                <DisclosurePanel as="dd" class="mt-2 pr-12">
                    <p class="text-base/7 text-brand-text dark:text-brand-text-dark">{{ faq.answer }}</p>
                </DisclosurePanel>
            </Disclosure>
        </dl>
    </div>
</template>
<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { MinusIcon, PlusIcon } from '@heroicons/vue/24/outline'

const faqs = [
    {
        "question": "Wann sind Termine möglich?",
        "answer": "In der Regel vergebe ich Termine ab 15 Uhr. In Ausnahmefällen sind auch frühere Termine möglich - vor allem bei dringenden Problemen oder wenn es zeitlich passt."
    },
    {
        "question": "Welche Geräte betreust du?",
        "answer": "Ich helfe dir bei PCs, Laptops, Smartphones und Tablets aller Marken - sowohl bei Softwareproblemen als auch bei der Einrichtung neuer Geräte."
    },
    {
        "question": "Kannst du mir bei der Auswahl eines neuen Smartphones oder Gaming Setups helfen?",
        "answer": "Ja, ich helfe dir gerne bei der Auswahl von Smartphones, Laptops oder anderen Geräten, die perfekt auf deine Bedürfnisse und dein Budget abgestimmt sind. Ich unterstütze dich auch beim Zusammenstellen und Aufbau eines Gaming-PCs sowie bei der Einrichtung des idealen Setups für dein Zuhause oder Büro."
    },
    {
        "question": "Hast du Erfahrung mit der Automatisierung von Prozessen?",
        "answer": "Ja, ich arbeite aktuell an Projekten in der Hochautomatisierung von Infineon und helfe gerne dabei, Prozesse zu optimieren. Zudem kann ich dir maßgeschneiderte Tools entwickeln, die dir bei der Automatisierung von alltäglichen Aufgaben helfen."
    },
    {
        "question": "Bietest du auch Workshops oder Schulungen an?",
        "answer": "Derzeit biete ich keine regulären Workshops an, aber wenn du Interesse an einem Vortrag oder einer Schulung hast, lass es mich wissen! Ich bin auch offen für Nachhilfe im Programmieren und helfe dir gerne weiter."
    },
    {
        "question": "Entwickelst du auch Websiten oder WebApps?",
        "answer": "Ja, ich entwickle moderne Webanwendungen - von einfachen Websites bis hin zu komplexen WebApps, die auf allen Geräten funktionieren und individuell an deine Anforderungen angepasst werden."
    },
    {
        "question": "Was kostet ein Hausbesuch?",
        "answer": "Der Preis beträgt 90€ pro angefangene Stunde für die Arbeitszeit. Zusätzlich fällt eine Pauschale für die Anfahrt an: 10€ innerhalb von Villach Stadt und 20€ in Villach Land. Du bezahlst also nur die tatsächliche Arbeitszeit plus die einmalige Anfahrtspauschale."
    },
]
</script>