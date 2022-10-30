<style scoped>
[data-theme="dark"] .btn-info:hover {
    @apply bg-info_hover border-0;
}
</style>

<template>
    <Button class="btn-info">
        <slot />
    </Button>
</template>