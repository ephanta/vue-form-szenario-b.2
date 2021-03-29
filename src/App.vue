<template>
<div id="content">
    <h1>Vue</h1>
    <div class="grid">
        <div class="left">
            <h2>Formular</h2>
            <form v-on:submit.prevent="postData" id="form">
                <div class="gender">
                    <p class="label">Geschlecht:</p>
                    <input v-model="gender" type="radio" id="male" name="gender" value="Männlich" required />
                    <label for="male">Männlich</label>
                    <input v-model="gender" type="radio" id="female" name="gender" value="Weiblich" required />
                    <label for="female">Weiblich</label>
                    <input v-model="gender" type="radio" id="other" name="gender" value="Divers" required />
                    <label for="other">Divers</label>
                </div>
                <div class="name">
                    <p class="label">Name:</p>
                    <input v-model="name" type="text" name="name" pattern="^[A-Za-zäöü ,.'-]+$" required />
                </div>
                <div class="birthdate">
                    <p class="label">Geburtsdatum</p>
                    <select v-model="bday" name="day" id="day" required>
                        <option value="" disabled selected>Tag</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select v-model="bmonth" name="month" id="month" required>
                        <option value="" disabled selected>Monat</option>
                        <option value="Januar">Januar</option>
                        <option value="Februar">Februar</option>
                        <option value="März">März</option>
                        <option value="April">April</option>
                        <option value="Mai">Mai</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Dezember">Dezember</option>
                    </select>
                    <select v-model="byear" name="year" id="year" required>
                        <option value="" disabled selected>Jahr</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                    </select>
                </div>
                <div class="color">
                    <p class="label">Farbauswahl:</p>
                    <div class="check">
                        <input v-model="color1" type="checkbox" id="color1" name="color1" value="color1" />
                        <label for="color1"> Farbe 1</label>
                    </div>
                    <div class="check">
                        <input v-model="color2" type="checkbox" id="color2" name="color2" value="color2" />
                        <label for="color2"> Farbe 2</label>
                    </div>
                    <div class="check">
                        <input v-model="color3" type="checkbox" id="color3" name="color3" value="color3" />
                        <label for="color3"> Farbe 3</label>
                    </div>
                    <div class="check">
                        <input v-model="color4" type="checkbox" id="color4" name="color4" value="color4" />
                        <label for="color4"> Farbe 4</label>
                    </div>
                </div>
                <div class="comment">
                    <p class="label">Anmerkung:</p>
                    <textarea v-model="comment" name="comment" required></textarea>
                </div>
                <input v-on:click="requirement" type="submit" value="Senden" />
            </form>
        </div>

        <div class="right answers">
            <h2>Angaben</h2>
            <div class="gender">
                <p class="label">
                    Geschlecht: <span class="answer gender">{{ gender }}</span>
                </p>
            </div>
            <div class="name">
                <p class="label">
                    Name: <span class="answer name">{{ name }}</span>
                </p>
            </div>
            <div class="birthdate">
                <p class="label">
                    Geburtsdatum:
                    <span class="answer day"> {{ bday }}{{ '. ' }} </span><span class="answer month"> {{ bmonth }}
                        {{ ' ' }} </span><span class="answer year"> {{ byear }}</span>
                </p>
            </div>
            <div class="color">
                <p class="label">Farbauswahl:</p>
                <div class="check">
                    <input v-if="color1" type="checkbox" class="answer color1" name="color1" value="color1" checked />
                    <label v-if="color1" for="color1"> Farbe 1</label>
                </div>
                <div class="check">
                    <input v-if="color2" type="checkbox" class="answer color2" name="color2" value="color2" checked />
                    <label v-if="color2" for="color2"> Farbe 2</label>
                </div>
                <div class="check">
                    <input v-if="color3" type="checkbox" class="answer color3" name="color3" value="color3" checked />
                    <label v-if="color3" for="color3"> Farbe 3</label>
                </div>
                <div class="check">
                    <input v-if="color4" type="checkbox" class="answer color4" name="color4" value="color4" checked />
                    <label v-if="color4" for="color4"> Farbe 4</label>
                </div>
            </div>
            <div class="comment">
                <p class="label">Anmerkung:</p>
                <span class="answer comment"> {{ comment }} </span>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
export default {
  name: "Home",
  data() {
      return {
        gender: "",
        name: "",
        bday: "",
        bmonth: "",
        byear: "",
        color1: false,
        color2: false,
        color3: false,
        color4: false,
        comment: "",
      };
    },
    methods: {
      requirement() {
        if (this.color1 === false && this.color2 === false && this.color3 === false && this.color4 ===
          false) {
          alert(
            "Bitte füllen Sie alle notwendigen Felder aus. Sie müssen mindestens eine Farbauswahl treffen.");
        }
      },
      postData() {
        const allData =  {
            gender: this.gender,
            name:  this.name,
            bday: this.bday,
            bmonth: this.bmonth,
            byear: this.byear,
            color1: this.color1,
            color2: this.color2,
            color3: this.color3,
            color4: this.color4,
            comment: this.comment,
        }
        axios.post("http://www.vue-form-b2.test/backend/ajax/ajax.php", allData).then(function(res) {
            console.log(res);
            }).catch(function(error){
            console.log(error);
            });
      }
    }
}
</script>
