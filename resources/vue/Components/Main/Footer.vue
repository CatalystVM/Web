<script>
export default {

}
</script>

<style scoped>
footer::before {
    background: linear-gradient(to right, theme('colors.rose.700'), theme('colors.yellow.600'), theme('colors.yellow.400'), theme('colors.lime.600'), theme('colors.blue.700'), theme('colors.purple.700'), theme('colors.rose.700'));
    animation: 6s linear infinite alternate rainbow-move
}

@keyframes rainbow-move {
    100% {
        background-position-x: 4000px
    }
}
</style>

<template>
    <footer class="before:absolute before:h-0.5 before:inset-x-0 before:top-0 relative bg-black">

    </footer>
</template>