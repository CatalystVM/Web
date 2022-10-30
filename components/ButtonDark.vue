<style scoped>
/* Dark Mode */
[data-theme="dark"] .btn-ghost {
    @apply border border-solid border-opacity-20 border-slate-50;
}

[data-theme="dark"] .btn-ghost:hover {
    @apply border-opacity-50 text-slate-50;
}

/* Light Mode */
[data-theme="light"] .btn-ghost {
    @apply border border-solid border-opacity-20 border-gray-200;
}

[data-theme="light"] .btn-ghost:hover {
    @apply border-opacity-50 text-gray-800;
}
</style>

<template>
    <Button class="btn-ghost">
        <slot />
    </Button>
</template>