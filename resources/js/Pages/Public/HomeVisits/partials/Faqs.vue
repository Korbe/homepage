<template>
    <div class="max-w-4xl py-12">
        <h2 class="text-4xl font-semibold tracking-tight text-brand-headline sm:text-3xl dark:text-brand-headline-dark">
            Häufig gestellte Fragen</h2>
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
        question: "Wie läuft ein Hausbesuch ab?",
        answer: "Ich komme nach Terminvereinbarung direkt zu Ihnen nach Hause, analysiere das Problem vor Ort und behebe es - egal ob es sich um einen langsamen PC, Softwarefehler oder Smartphone-Probleme handelt. Ich erkläre jeden Schritt verständlich und gebe Tipps, wie Sie ähnliche Probleme künftig vermeiden können."
    },
    {
        question: "Wann sind Termine möglich?",
        answer: "In der Regel vergebe ich Termine ab 15 Uhr. In Ausnahmefällen sind auch frühere Termine möglich - vor allem bei dringenden Problemen oder wenn es zeitlich passt."
    },
    {
        question: "Reparieren Sie auch Hardware oder retten Daten?",
        answer: "Nein, ich repariere keine Hardware und biete keine Datenrettung von defekten Festplatten an. Mein Schwerpunkt liegt auf Softwareproblemen, Systemeinrichtungen, Fehlerbehebungen und Beratung."
    },
    {
        question: "Was kostet ein Hausbesuch?",
        answer: "Hausbesuche kosten in der Regel 120 € pro Stunde, können aber - je nach Aufwand und Problem - mehr betragen. Sie erhalten immer eine faire und transparente Einschätzung im Voraus."
    },
    {
        question: "Wie schnell bekomme ich einen Termin?",
        answer: "In der Regel sehr schnell. Wenn Sie mich telefonisch einmal nicht erreichen, rufe ich so bald wie möglich zurück. Notfälle werden nach Möglichkeit bevorzugt behandelt."
    },
    {
        question: "Muss ich meine Geräte vorbeibringen?",
        answer: "Nein – genau das ist der Vorteil meines Services. Ich komme direkt zu Ihnen nach Hause, sodass Sie nichts abbauen oder transportieren müssen. Sollte ein Problem vor Ort nicht lösbar sein, finden wir gemeinsam eine passende Lösung."
    }
]
</script>