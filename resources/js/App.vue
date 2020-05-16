<template>
	<div id="app">
		<transition name="fade">
			<router-view class="main"></router-view>
		</transition>
	</div>
</template>
<script>
import Header from "./components/Header.vue";

export default {
    name: "app",
    components: {
        Header
    }
};
</script>
<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition-property: opacity;
    transition-duration: 0.25s;
}

.fade-enter-active {
    transition-delay: 0.25s;
}

.fade-enter,
.fade-leave-active {
    opacity: 0;
}
</style>
