<template>
    <layout>
        <div class="my-5">
            <inertia-link href="/users/create" class="btn btn-primary">Create User</inertia-link>
        </div>
        <div v-if="success" class="alert alert-success">
            {{ success }}
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users" :key="user.id">
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>
                        <inertia-link :href="`/users/${user.id}/edit`">Edit</inertia-link> |
                        <a href="" class="">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </layout>
</template>

<script>
import Layout from "../../Shared/Layout";
export default {
    props: ['users', 'success'],
	components: {
		Layout,
	},
};
</script>