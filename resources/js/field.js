Nova.booting((Vue, router) => {
    Vue.component('index-plain-text', require('./components/IndexField'));
    Vue.component('detail-plain-text', require('./components/DetailField'));
    Vue.component('form-plain-text', require('./components/FormField'));
})
