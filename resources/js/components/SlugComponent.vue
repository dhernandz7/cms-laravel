<template>
	<div>
		<div class="form-group">
			<label v-bind:for="input">{{ title }}</label>
			<input class="form-control" v-bind:id="input" v-bind:name="input" type="text" v-model="name">
		</div>
		<div class="form-group">
			<label for="name">URL amigable</label>
			<input class="form-control" id="slug" name="slug" type="text" v-model="slug">
		</div>
	</div>
</template>

<script>
	import slugify from 'slugify';
	export default {
		props: ['input', 'title', 'value'],
		data() {
			return {
				name: '',
				slug: ''
			}
		},
		mounted() {
			this.name = this.value
		},
		watch: {
			name: function(val) {
				this.toSlug(val)
			}
		},
		methods: {
			toSlug(val) {
				this.slug = slugify(val, {
					replacement: '-',
					remove: undefined,
					lower: true,
					strict: true,
					locale: 'es'
				})
			}
		}
	}
</script>