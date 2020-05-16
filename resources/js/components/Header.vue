<template>
	<div>
		<b-navbar toggleable="sm" type="dark" variant="info" fixed="top">
			<b-navbar-brand href="#">Money App</b-navbar-brand>

			<b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

			<b-collapse id="nav-collapse" is-nav>
				<b-navbar-nav>
					<b-nav-item><router-link to="/">Főoldal</router-link></b-nav-item>
					<b-nav-item><router-link to="/actions">Pénzügyi feljegyzés</router-link></b-nav-item>
          <b-nav-item><router-link to="/statistics">Statisztikák</router-link></b-nav-item>
				</b-navbar-nav>
			</b-collapse>
		</b-navbar>
	</div>
</template>

<script>
export default {
    name: "Header"
}

</script>
