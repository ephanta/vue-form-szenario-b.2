<template>
  <div class="textarea">
    <label for="text">Textarea:</label>
    <textarea v-model="message" placeholder="add multiple lines"></textarea>
  </div>
</template>

<script>
export default {
  name: "Textarea",
};
</script>

<style lang="scss" scoped></style>
