<template>
	<layout>
        <div class="alert alert-danger mt-4" v-if="Object.keys(errors).length > 0">
            {{ errors[Object.keys(errors)[0]][0]}}
        </div>
		<div class="col-md-6">
			<form action="/users" class="my-5" @submit.prevent="createUser">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" v-model="form.name" />
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" v-model="form.email" />
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" v-model="form.password" />
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</layout>
</template>

<script>
import Layout from "../../Shared/Layout";
import axios from "axios";
export default {
    props: ['errors'],
	components: {
		Layout,
	},
	data() {
		return {
			form: {
				name: "",
				email: "",
				password: "",
			},
		};
	},
	methods: {
		createUser() {
			this.$inertia.post("/users", this.form).then(() => {});
		},
	},
};
</script>