<template>
  <div class="input">
    <input v-model="message" placeholder="edit me" />
    <p>Message is: {{ message }}</p>
  </div>
</template>

<script>
export default {
  name: "Input",
  data() {
    return {
      message: "",
    };
  },
};
</script>

<style lang="scss" scoped></style>
