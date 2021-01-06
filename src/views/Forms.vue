<template>
  <div class="forms">
    <h1>Formulare</h1>
    <div class="forms-components">
      <div class="checkbox">
        <label for="checkbox">Checkbox ist {{ checked }} </label>
        <input type="checkbox" id="checkbox" v-model="checked" />
      </div>
      <div class="input">
        <label for="input">Input: </label>
        <input v-model="input" placeholder="Input" />
        <p>Input ist: {{ input }}</p>
      </div>
      <div class="textarea">
        <label for="text">Textarea: </label>
        <textarea v-model="text" placeholder="textarea"></textarea>
        <p>Text ist: {{ text }}</p>
      </div>
    </div>
  </div>
</template>

<script>
import Input from "@/components/Forms/Input";
import Textarea from "@/components/Forms/Textarea";
import Select from "@/components/Forms/Select";
import Checkbox from "@/components/Forms/Checkbox";
import Radio from "@/components/Forms/Radio";

export default {
  name: "Forms",
  components: Input,
  Textarea,
  Select,
  Checkbox,
  Radio,
  data() {
    return {
      checked: false,
      input: "",
      text: "",
    };
  },
};
</script>

<style lang="scss" scoped>
.forms {
  .forms-components {
    margin: 0 auto;
    width: 50%;
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: auto;
    grid-gap: 20px;
    justify-items: left;
    text-align: left;
  }
}
</style>
