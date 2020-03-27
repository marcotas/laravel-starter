<template>
    <div>
        <label class="block mb-1" v-if="label">{{ label }}</label>
        <input
            type="text"
            :name="name"
            class="px-3 py-2 rounded outline-none border shadow focus:shadow-outline w-full transition duration-150"
            :class="
                error
                    ? 'border-red-400'
                    : 'border-transparent focus:border-blue-500'
            "
            :placeholder="placeholder"
            :value="value"
        />

        <p class="text-xs mt-1 text-red-500">{{ error }}</p>
    </div>
</template>

<script>
    export default {
        props: {
            value: { default: null },
            name: { required: true },
            label: { default: null, type: String },
            placeholder: { default: null },
            error: { default: null }
        }
    };
</script>
