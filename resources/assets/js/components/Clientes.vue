<template lang="html">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Cédula</th>
            <th>Nit</th>
            <th><button id="btn-add" class="btn btn-success btn-xs" ng-click="toggle('add',0)">Crear Cliente</button></th>
        </tr>
        </thead>
        <tbody>
            <tr v-for=" cliente in clientes">
                <td>{{ cliente.cliente_id }}</td>
                <td>{{ cliente.cliente_nombre }}</td>
                <td>{{ cliente.cliente_cedula }}</td>
                <td>{{ cliente.cliente_nit }}</td>
                <td>
                    <button id="btn-edit" class="btn btn-warning btn-xs btn-detail" ng-click="toggle('edit', cliente.cliente_id)">
                        <span class="glyphicon glyphicon-edit"></span></button>
                    </button>
                    <button id="btn-delete" class="btn btn-warning btn-xs btn-detail" ng-click="confirmDelete(cliente.cliente_id)">
                        <span class="glyphicon glyphicon-trash"></span></button>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>


    export default {
        data(){
            return {
                clientes: {},

            }
        },
        created(){
            this.fetchClientes();
        },
        methods: {
            fetchClientes: function(){
                this.$http.get('/api/cliente').then(response => {
                    this.clientes = response.data.clientes;

                }, response => {
                    // error callback
                });
            },
        }
    }
</script>