<template>
    <div class="pt-2 pb-3" :dusk="`${filter.name}-filter-text-container`">
        <h3 className="px-3 text-xs uppercase font-bold tracking-wide">
            {{ filter.name }}
        </h3>

        <div className="mt-1 px-3">
            <div class="flex relative">
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
