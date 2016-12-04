@extends('layouts.app')

@section('content')
    <div v-for="plan in plans">
        <plan :plan="plan" :active-in-child.sync="active" inline-template>
            <div>
                <span>@{{ plan.name }}</span>
                <span>@{{ plan.price }}/month</span>
                <button @click="setActivePlan" v-if="plan.name !== activeInChild.name">
                @{{ isUpgrade ? 'Upgrade' : 'Downgrade' }}
                </button>

                <span v-else>Selected</span>
            </div>
        </plan>
    </div>
@stop

@section('scripts')

    <script>
        new Vue({
            el: '#app',

            data: {
                plans: [
                    {name: 'Enterprise', price: 100},
                    {name: 'Pro', price: 50},
                    {name: 'Personal', price: 10},
                    {name: 'Free', price: 0}
                ],
                active: {}
            },

            components: {
                plan: {
                    props: ['plan', 'activeInChild'],

                    computed: {
                        isUpgrade: function () {
                            return this.plan.price > this.activeInChild.price;
                        }
                    },

                    methods: {
                        setActivePlan: function () {
                            this.activeInChild = this.plan;
                        }
                    }
                }
            }
        });
    </script>
@stop