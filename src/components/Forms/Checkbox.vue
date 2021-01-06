<template>
  <div class="checkbox">
    <input type="checkbox" id="checkbox" v-model="checked" />
    <label for="checkbox">{{ checked }}</label>
  </div>
</template>

<script>
export default {
  name: "Checkbox",
  data() {
    return {
      checked: false,
    };
  },
};
</script>

<style lang="scss" scoped></style>
