<template>
    <div>
        <h1>{{ $t('welcome.welcome') }}</h1>
        <p>{{ $t('welcome.greetings') }}</p>

        <button @click="changeLang">
            Toggle Language
        </button>
    </div>
</template>

<script>
export default {
    name: "App",
    methods: {
        changeLang ()
        {
            this.$i18n.locale = this.$i18n.locale === 'en' ? 'pt' : 'en'
        }
    }
}
</script>

<style scoped>

</style>
