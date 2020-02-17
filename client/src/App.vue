<template>
  <div id="app">
    <Header />
    <VendorAdd />
    <Footer />
  </div>
</template>

<script>
  import Header from './components/common/Header.vue'
  import VendorAdd from './components/vendor/Add.vue'
  import Footer from './components/common/Footer.vue'

  export default {
    name: 'App',
    components: {
      Header,VendorAdd,Footer,
    }
  }
</script>

<style>

</style>
