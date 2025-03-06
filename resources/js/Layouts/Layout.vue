<template>
  <header>
    <nav>
      <ul>
        <li>
          <Link href="/">Home</Link>
        </li>
        <li>
          <Link href="/cars">Cars</Link>
        </li>
        <li>
          <Link href="/bidders">Bidders</Link>
        </li>
      </ul>
    </nav>
  </header>

  <slot></slot>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
  name: "Layout",
  components: { Link },
};
</script>

<style scoped>

header {
  background: linear-gradient(90deg, #0f2027, #203a43, #2c5364);
  box-shadow: 0 4px 15px rgba(0, 212, 255, 0.4);
  padding: 15px 0;
  position: sticky;
  top: 0;
  width: 100%;
  z-index: 1000;
}


nav ul {
  display: flex;
  justify-content: center;
  gap: 2.5rem;
  list-style-type: none;
  padding: 0;
}


nav li {
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
  color: #ffffff;
  padding: 10px 20px;
  border-radius: 8px;
  transition: 0.3s ease-in-out;
  cursor: pointer;
  position: relative;
}


nav li::before {
  content: "";
  position: absolute;
  bottom: -5px;
  left: 50%;
  width: 0;
  height: 3px;
  background: #00d4ff;
  transition: 0.4s ease-in-out;
  transform: translateX(-50%);
}

nav li:hover::before {
  width: 100%;
}

nav li:hover {
  color: #00d4ff;
  text-shadow: 0px 0px 10px #00d4ff;
}


a {
  text-decoration: none;
  color: inherit;
}
</style>
