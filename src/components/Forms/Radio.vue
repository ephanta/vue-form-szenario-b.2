<template>
  <div class="radio">
    <input type="radio" id="one" value="One" v-model="picked" />
    <label for="one">One</label>
    <br />
    <input type="radio" id="two" value="Two" v-model="picked" />
    <label for="two">Two</label>
    <br />
    <span>Picked: {{ picked }}</span>
  </div>
</template>

<script>
export default {
  name: "Checkbox",
  data() {
    return {
      picked: "",
    };
  },
};
</script>

<style lang="scss" scoped></style>
