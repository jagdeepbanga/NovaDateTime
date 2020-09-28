Nova.booting((Vue, router, store) => {
    Vue.component('index-nova-date-time', require('./components/IndexField'))
    Vue.component('detail-nova-date-time', require('./components/DetailField'))
    Vue.component('form-nova-date-time', require('./components/FormField'))
    Vue.component('form-nova-date-time-picker', require('./components/DateTimePicker'))
})
