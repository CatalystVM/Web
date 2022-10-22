<script>
export default {
    data() {
        return {
            visible: true
        }
    }
}
</script>

<style scoped>
#dialog {
    box-shadow: 0 -22px 50px rgb(0 0 0 / 20%);
}
</style>

<template>
    <div class="w-full p-5 lg:px-24 absolute top-0 bg-semi_dark z-50" id="dialog" v-if="visible">
        <div class="md:flex items-center -mx-3">
            <div class="md:flex-1 px-3 mb-5 md:mb-0">
                <p class="text-center md:text-left text-white text-xs leading-tight md:pr-12">We and selected partners
                    and
                    related companies, use cookies and similar technologies as specified in our Cookies Policy. You
                    agree to
                    consent to the use of these technologies by clicking Accept, or by continuing to browse this
                    website.
                    You can learn more about how we use cookies and set cookie preferences in Settings.</p>
            </div>
            <div class="px-3 text-center">
                <button
                    class="py-2 px-8 bg-gray-800 hover:bg-gray-900 text-white rounded font-bold text-sm shadow-xl mr-3">Cookie
                    settings</button>
                <button class="py-2 px-8 bg-blue-600 hover:bg-blue-700 text-white rounded font-bold text-sm shadow-xl"
                    @click="visible = false">Accept cookies</button>
            </div>
        </div>
    </div>
</template>