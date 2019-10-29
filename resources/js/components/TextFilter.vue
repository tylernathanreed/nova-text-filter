<template>
    <div>
        <h3 class="text-sm uppercase tracking-wide text-80 bg-30 p-3">
            {{ filter.name }}
        </h3>

        <div class="p-2">
            <input
                :dusk="`${filter.name}-filter-text`"
                class="block w-full form-control-sm form-input form-input-bordered"
                type="text"
                :placeholder="placeholder"
                :value="value"
                @change="handleChange"
                :options="[]"
                label="name"
            />
        </div>
    </div>
</template>

<script>
export default {
    props: {
        resourceName: {
            type: String,
            required: true,
        },
        filterKey: {
            type: String,
            required: true,
        },
        lens: String
    },

    methods: {
        handleChange(event) {
            this.$store.commit(`${this.resourceName}/updateFilterState`, {
                filterClass: this.filterKey,
                value: event.target.value,
            })

            this.$emit('change')
        },
    },

    computed: {
        filter() {
            return this.$store.getters[`${this.resourceName}/getFilter`](
                this.filterKey
            )
        },

        placeholder() {
            return this.filter.placeholder || this.filter.name
        },

        value() {
            return this.filter.currentValue
        },
    },
}
</script>
