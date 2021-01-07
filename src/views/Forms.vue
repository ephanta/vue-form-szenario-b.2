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
      <div class="radio">
        <input type="radio" id="one" value="One" v-model="picked" />
        <label for="one">One</label>
        <br />
        <input type="radio" id="two" value="Two" v-model="picked" />
        <label for="two">Two</label>
        <br />
        <span>Picked ist: {{ picked }}</span>
      </div>
      <div class="select">
        <label for="sel">Selected ist: </label>
        <select id="sel">
          <option>5</option>
          <option>4</option>
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select>
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
      picked: "",
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
