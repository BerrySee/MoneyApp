<template>
<div>
    <actionheader>
    </actionheader>
    <transition name="fade">
    <div class="container-fluid text-center" v-if="this.$route.path == '/actions'">
        <b-row class="p-4" align-h="center">
        <h2 >Pénzügy rögzítés</h2>
        </b-row>
    <b-row align-h="between" class="mx-auto">
        <b-col cols="3">
           <router-link tag="img" :to="{ name : 'add'}" v-bind="image" class="add-img" src='img/add.png' alt="add">
           </router-link>
           <p class="mt-4">Hozzáadás</p>
        </b-col>
        <b-col cols="3">
            <router-link tag="img" :to="{name : 'edit'}" v-bind="image" class="edit-img" src='img/edit.png' alt="add"></router-link>
            <p class="mt-4">Szerkesztés</p>
        </b-col>
        <b-col cols="3">
            <router-link tag="img" :to="{name: 'del'}" v-bind="image" class="delete-img" src='img/delete.png' alt="add"></router-link>
            <p class="mt-4">Törlés</p>
        </b-col>
    </b-row>
    </div>
</transition>
     <transition name="fade">
    <router-view class="main">
    </router-view>
     </transition>
    </div>
</template>

<script>
import Actionheader from './Actionheader.vue'

export default {
    components: {
        Actionheader
    },
    data () {
        return {
            image: {
                width: 80,
                height: 80
            }
        }
    }
};
</script>
<style scoped>

.fade-enter-active,
.fade-leave-active {
    transition-property: opacity;
    transition-duration: 0.35s;
}

.fade-enter-active {
    transition-delay: 0.35s;
}

.fade-enter,
.fade-leave-active {
    opacity: 0;
}

</style>
