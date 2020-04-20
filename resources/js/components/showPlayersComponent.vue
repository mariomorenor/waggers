<template>
    <div>
        <div class="card mb-3 mx-4" v-for="player in players" :key="player.id">
            <div class="card-header">
                <div class="d-flex ">
                <label for="" class="my-auto">{{player.nickname}}</label>
                    <button class="btn btn-primary btn-sm ml-auto">
                        Desafiar
                    </button>
                </div>

            </div>
            <div class="card-body pt-2 pb-0 my-1">
                <div class="row">
                    <div class="col-5 col-md-2 col-lg-2 ">
                <label class="text-success font-weight-bold m-0">Wins: {{player.wins}}</label>
                <label class="text-danger font-weight-bold m-0">Perdidas: {{player.fails}}</label>
                    </div>
                    <div class="col">
                        <img src="" hidden alt="Profile Image">
                    </div>

                </div>
                

            </div>
            <div class="card-footer p-0 ml-auto border-0 mr-2">
                <a :href="'users/'+player.id" >Más Detalles</a>
            </div>
        </div>
        <infinite-loading @infinite="infiniteHandler" spinner="bubbles">
            <div slot="no-more">No Hay Más Datos prros...</div>
            <div slot="no-results">No Existen Datos</div>
        </infinite-loading>
    </div>
</template>

<script>
export default {
    data() {
        return {
            players: [],
            page: 0
        }
    },
    methods: {
        infiniteHandler($state) {
            this.page++;
            var that = this;
            $.get({
                url: '/find_players?page=' + that.page,
                success: function (response) {
                    if (response.data.length) {
                        that.players = that.players.concat(response.data)
                        $state.loaded()
                    } else {
                        $state.complete()
                    }
                },
                error: function (error) {
                    console.log(error)
                }
            }); 
        }
    }
}
</script>