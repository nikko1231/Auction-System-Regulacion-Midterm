<script>
import Layout from "@/Layouts/Layout.vue";

export default {
  layout: Layout,
  data() {
    return {
      message: "Nikko Regulacion - BSIT-III",
    };
  },
};
</script>

<template>
  <div class="home-container">
    <div class="overlay"></div>
    <div class="content">
      <h1 class="title">Auction System</h1>
      <p class="subtitle">Welcome to the Future of Bidding!</p>
      <div class="user-info">{{ message }}</div>
    </div>
  </div>
</template>

<style scoped>

.home-container {
  position: relative;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  background: url("https://source.unsplash.com/1600x900/?galaxy,stars") no-repeat center center/cover;
  color: white;
  overflow: hidden;
}


.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.6);
}


.content {
  position: relative;
  z-index: 2;
  max-width: 600px;
}

.title {
  font-size: 3rem;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 3px;
  text-shadow: 0px 0px 15px rgba(0, 212, 255, 0.7);
  animation: glow 2s infinite alternate;
}


.subtitle {
  font-size: 1.5rem;
  margin-top: 10px;
  color: #00d4ff;
  text-shadow: 0px 0px 10px #00d4ff;
}


.user-info {
  margin-top: 20px;
  font-size: 1.2rem;
  background: rgba(255, 255, 255, 0.2);
  padding: 10px 20px;
  border-radius: 10px;
  display: inline-block;
  box-shadow: 0px 0px 10px rgba(0, 212, 255, 0.5);
}


@keyframes glow {
  from {
    text-shadow: 0px 0px 15px rgba(0, 212, 255, 0.7);
  }
  to {
    text-shadow: 0px 0px 30px rgba(0, 212, 255, 1);
  }
}
</style>
