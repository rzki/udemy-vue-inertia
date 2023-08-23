<template>
    <div class="">
        <Link href="/show">Show Page</Link> <br><br>
        <Link href="/">Index Page</Link>
        <h2>Timer : {{ timer }}</h2>
    </div>
    <slot></slot>
</template>
<script setup>
import { ref } from 'vue';

const timer = ref(0);
setInterval(() => timer.value++, 1000);
</script>