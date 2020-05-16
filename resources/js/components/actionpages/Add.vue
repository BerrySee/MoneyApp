<template>
    <div>
        <div class="container-fluid text-center">
		<b-row class="mx-auto">
			<b-col cols="12" class="mt-3">
				<b-row align-h="center">
                    <b-col cols="4">
                        <b-img @click="selected = 'income'; changeIncome()" class="income-img" :class="{choosen:choosen == 'choosenIncome'}" src="img/plus.png" v-bind="image" alt="plus">
                        </b-img>
                        <h3 class="mt-4">Bevétel</h3>
                    </b-col>
                     <b-col cols="4">
                        <b-img @click="selected = 'outcome'; changeOutcome()" class="outcome-img" :class="{choosen:choosen == 'choosenOutcome'}" src='img/minus.png' v-bind="image" alt="minus"></b-img>
                        <h3 class="mt-4">Kiadás</h3>
                    </b-col>
                    <transition name="slide">
					<b-col v-if="!selected" cols="12" class="p-2">
						<h3>Válassz mit szeretnél rögzíteni</h3>
                        <hr></b-col
					>

                    </transition>
				</b-row>
			</b-col>
		</b-row>
        <transition name="fade">
        <div v-if="selected">
		<b-row  align-v="center" align-h="center">
			<b-col cols="12" sm="5" class="p-2">
				<b-form-group
					id="input-group-1"
					label="Válassz nevet"
					label-for="input-1"
				>
					<b-form-select
						v-model="finance.name"
						:options="names"
					></b-form-select>
				</b-form-group>

				<b-form-group
					v-if="selected === 'income'"
					id="input-group-1"
					label="Válassz bevételt"
					label-for="input-1"
				>
					<b-form-select
						v-model="finance.type"
						:options="typeIncomes"
					></b-form-select>
				</b-form-group>
				<b-form-group
					v-else-if="selected === 'outcome'"
					id="input-group-1"
					label="Válassz kiadást"
					label-for="input-1"
				>
					<b-form-select
						v-model="finance.type"
						:options="typeOutcomes"
					></b-form-select>
				</b-form-group>
                <b-form-group
					id="input-group-1"
					label="Add meg az összeget"
					label-for="input-1"
				>
					<b-form-input
						v-model="finance.amount"
                        type="number"
					></b-form-input>
				</b-form-group>
			</b-col>
			<b-col cols="12" sm="5" class="p-2">
				<b-calendar block v-model="finance.date" locale="en-US" class="mt-3">
					<b-button
						size="sm"
						variant="outline-danger"
						v-if="finance.date"
						@click="clearDate"
					>
						Clear date
					</b-button>
				</b-calendar>
			</b-col>
		</b-row>
         <b-button class="btn btn-success m-4" @click="recordMoney">
                Rögzítés
            </b-button>
        </div>

        </transition >
        <transition name="slide">
        <div>
        <b-row align-v="center" align-h="center">
                <h4>Utolsó 5 pénzmozgás</h4>
        </b-row>
        <b-row align-v="center" align-h="center">


            <b-col cols="12" sm="6" class="p-2">
                <h4>Bevétel</h4>
                <b-table-simple table-variant="success" hover striped >
                <b-thead>
                    <b-th>Név</b-th>
                    <b-th>Típus</b-th>
                    <b-th>Összeg</b-th>
                    <b-th>Dátum</b-th>
                </b-thead>
                    <transition-group name="list" tag="b-tbody">
                    <b-tr v-for="income in incomes" :key="income.id">
                        <b-th> {{income.name}} </b-th>
                        <b-th> {{income.type}} </b-th>
                        <b-th> {{income.amount}} </b-th>
                        <b-th> {{income.date}} </b-th>
                    </b-tr>
                    </transition-group>
                </b-table-simple>

            </b-col>
            <b-col cols="12" sm="6" class="p-2">
                <h4>Kiadás</h4>
                <b-table-simple table-variant="danger" hover striped>
                <b-thead >
                    <b-th>Név</b-th>
                    <b-th>Típus</b-th>
                    <b-th>Összeg</b-th>
                    <b-th>Dátum</b-th>
                </b-thead>
                    <transition-group name="list" tag="b-tbody">
                    <b-tr v-for="outcome in outcomes" :key="outcome.id">
                        <b-th> {{outcome.name}} </b-th>
                        <b-th> {{outcome.type}} </b-th>
                        <b-th> {{outcome.amount}} </b-th>
                        <b-th> {{outcome.date}} </b-th>
                    </b-tr>
                    </transition-group>
                </b-table-simple>

            </b-col>
    </b-row>
    </div>
    </transition>
	</div>
    </div>
</template>
<script>
import { Income } from "../../api/income";
import { Outcome } from "../../api/outcome";
export default {
    name: 'Add',
    data() {
        return {
            choosen: '',
            image: {
                width: 100,
                height: 100
            },
            selected: null,
            incomes: {},
            outcomes: {},
            loading: false,
            finance: {
                name: null,
                type: null,
                amount: null,
                date: null
            },
            names: [
                {
                    value: null,
                    text: "Válassz nevet"
                },
                {
                    value: "Berci",
                    text: "Berci"
                },
                {
                    value: "Vivi",
                    text: "Vivi"
                }
            ],
            typeIncomes: [
                {
                    value: null, text: 'Válassz bevételt!'
                },
                {
                    value: 'salary', text: 'Fizetés'
                },
                {
                    value: 'gift', text: 'Ajándék'
                }
            ],
            typeOutcomes: [
                {
                    value: null, text: 'Válassz kiadást!'
                },
                {
                    value: 'rent', text: 'Albérlet'
                },
                {
                    value: 'car', text: 'Autó'
                },
                {
                    value: 'clothes', text: 'Ruházkodás'
                },
                {
                    value: 'groceries', text: 'Élelmiszer'
                }
            ]
        };
    },
    mounted() {
        this.callMoney();
    },
    methods: {
        changeIncome() {
            this.choosen = 'choosenIncome'
        },
        changeOutcome() {
            this.choosen = 'choosenOutcome'
        },
        clearDate() {
            this.finance.date = null;
        },
        callMoney() {
            let self = this;
            this.loading = true;

            Income.lastIncome()
                .then(response => {
                    self.loading = false;
                    self.incomes = JSON.parse(JSON.stringify(response.data));
                    console.log(self.incomes);
                })
                .catch(error => {
                    this.loading = false;
                    console.log(error);
                });

            Outcome.lastOutcome()
                .then(response => {
                    self.loading = false;
                    self.outcomes = JSON.parse(JSON.stringify(response.data));
                    console.log(self.outcomes);
                })
                .catch(error => {
                    this.loading = false;
                    console.log(error);
                });
        },
        recordMoney() {
            let self = this;
            if (this.selected ==="income") {
            Income.addIncome({
                name: self.finance.name,
                type: self.finance.type,
                amount: self.finance.amount,
                date: self.finance.date
            })
            .then(response => {
                console.log(response.data.message)
                this.callMoney();
            }).catch(error =>{
                console.log(error)
            })
            } else if (this.selected === "outcome") {
            Outcome.addOutcome({
                name: self.finance.name,
                type: self.finance.type,
                amount: self.finance.amount,
                date: self.finance.date
            })
            .then(response => {
                console.log(response.data.message)
                this.callMoney();
            }).catch(error =>{
                console.log(error)
            })
        }
    }
    },
    watch: {
        selected: function() {
            this.finance= {
                name: null,
                type: null,
                amount: null,
                date: null
            }
        }
    }
}
</script>
<style scoped>
.slide-enter-active {
   -moz-transition-duration: 0.3s;
   -webkit-transition-duration: 0.3s;
   -o-transition-duration: 0.3s;
   transition-duration: 0.3s;
   -moz-transition-timing-function: ease-in;
   -webkit-transition-timing-function: ease-in;
   -o-transition-timing-function: ease-in;
   transition-timing-function: ease-in;
}

.slide-leave-active {
   -moz-transition-duration: 0.3s;
   -webkit-transition-duration: 0.3s;
   -o-transition-duration: 0.3s;
   transition-duration: 0.3s;
   -moz-transition-timing-function: ease-in;
   -webkit-transition-timing-function: ease-in;
   -o-transition-timing-function: ease-in;
   transition-timing-function: ease-in;
}

.slide-enter-to, .slide-leave {
   max-height: 100px;
   overflow: hidden;
}

.slide-enter, .slide-leave-to {
   overflow: hidden;
   max-height: 0;
}
.fade-enter-active,
.fade-leave-active {
    transition-property: opacity;
    transition-duration: 0.35s;
}

.fade-enter-active {
    transition-delay: 0.35s;
}

.fade-enter,
.fade-leave-active {
    opacity: 0;
}
.list-enter-active {
    transform: translateY(0px);
    transition: all 1s;
}
.list-leave-active {
    display:none;
    overflow: hidden;
}
.list-enter, .list-leave-to{
    opacity: 0;

}

.list-leave .list-enter-to{
    opacity: 1;
}

</style>
