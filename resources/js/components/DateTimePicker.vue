<template>
    <input
        :disabled="disabled"
        :class="{ '!cursor-not-allowed': disabled }"
        :value="value"
        ref="datePicker"
        type="text"
        :placeholder="placeholder"
    />
</template>

<script>
import flatpickr from 'flatpickr'
import 'flatpickr/dist/themes/airbnb.css'

export default {
    props: {
        value: {
            required: false,
        },
        placeholder: {
            type: String,
            default: () => {
                return moment().format('YYYY-MM-DD')
            },
        },
        disabled: {
            type: Boolean,
            default: false,
        },
        dateFormat: {
            type: String,
            default: 'Y-m-d H:i:S',
        },
        altFormat: {
            type: String,
            default: 'Y-m-d H:i:S',
        },
        twelveHourTime: {
            type: Boolean,
            default: false,
        },
        enableTime: {
            type: Boolean,
            default: true,
        },
        enableSeconds: {
            type: Boolean,
            default: true,
        },
        firstDayOfWeek: {
            type: Number,
            default: 0,
        },
        defaultHour: {
            type: Number,
            default: 0,
        },
        defaultMinute: {
            type: Number,
            default: 0,
        },
        defaultSeconds: {
            type: Number,
            default: 0,
        },
    },

    data: () => ({flatpickr: null}),

    mounted() {
        this.$nextTick(() => {
            this.flatpickr = flatpickr(this.$refs.datePicker, {
                enableTime: this.enableTime,
                enableSeconds: this.enableSeconds,
                onClose: this.onChange,
                onChange: this.onChange,
                dateFormat: this.dateFormat,
                altInput: true,
                altFormat: this.altFormat,
                allowInput: true,
                // static: true,
                defaultHour: this.defaultHour,
                defaultMinute: this.defaultMinute,
                defaultSeconds: this.defaultSeconds,
                time_24hr: !this.twelveHourTime,
                locale: {firstDayOfWeek: this.firstDayOfWeek},
            })
        })
    },

    methods: {
        onChange(event) {
            this.$emit('change', this.$refs.datePicker.value)
        },

        clear() {
            this.flatpickr.clear()
        },
    },

    beforeDestroy() {
        this.flatpickr.destroy()
    },
}
</script>

<style scoped>
.\!cursor-not-allowed {
    cursor: not-allowed !important;
}
</style>
