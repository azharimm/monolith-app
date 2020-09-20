<template>
	<main>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Navbar</a>
			<button
				class="navbar-toggler"
				type="button"
				data-toggle="collapse"
				data-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup"
				aria-expanded="false"
				aria-label="Toggle navigation"
			>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
                    <inertia-link class="nav-link" href="/">Home</inertia-link>
                    <inertia-link class="nav-link" href="/about">About</inertia-link>
                    <inertia-link class="nav-link" href="/contact">Contact</inertia-link>
                    <inertia-link class="nav-link" href="/users">User</inertia-link>
				</div>
			</div>
		</nav>
		<article class="container">
			<slot />
		</article>
	</main>
</template>

<script>
export default {
	inject: ['page']
}
</script>