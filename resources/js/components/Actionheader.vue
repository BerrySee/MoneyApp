<template>
	<div>
		<b-navbar toggleable="sm" type="dark" variant="info" fixed="top">
			<b-navbar-brand><router-link :to ="{name: 'home'}">Főoldal</router-link></b-navbar-brand>
			<b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
			<b-collapse id="nav-collapse" is-nav>
				<b-navbar-nav>
					<b-nav-item><router-link :to="{name: 'add'}" >Hozzáadás</router-link></b-nav-item>
					<b-nav-item><router-link :to="{name: 'edit'}" >Szerkesztés</router-link></b-nav-item>
                    <b-nav-item><router-link :to="{name: 'del'}" >Törlés</router-link></b-nav-item>
				</b-navbar-nav>
			</b-collapse>
		</b-navbar>
	</div>
</template>

<script>
export default {
    name: "Actionheader"
}

</script>
