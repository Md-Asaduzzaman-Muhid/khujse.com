<template>
  <div class="header bg-dark text-white">
    <nav class="navbar header-nav navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="@/assets/logo.png" alt="image" class="img-fluid" style="width: 30px;"/>
        </a>
        <button
          class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
          <span></span><span></span><span></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
          <ul class="navbar-nav">
            <li><a class="nav-link active" href="#home">Home</a></li>
            <li><a class="nav-link" href="#about">About Us</a></li>
            <li><a class="nav-link" href="#services">Services</a></li>
            <li><a class="nav-link" href="#blog">Blog</a></li>
            <li><a class="nav-link" href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
export default {
  name: "Header"
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
