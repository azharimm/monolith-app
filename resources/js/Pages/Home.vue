<template>
    <layout>
        <div>This is the {{ page }} page</div>
    </layout>
</template>

<script>
import Layout from "../Shared/Layout";
export default {
	props: ["page"],
	components: {
		Layout,
	},
};
</script>