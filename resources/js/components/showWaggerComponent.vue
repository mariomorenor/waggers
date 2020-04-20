<template>
  <div>
    <div class="row">
      <div class="col-12 col-sm-4 col-md-7 col-lg-8 mx-auto">
          <div class="card mx-4" v-for="wagger in waggers" :key="wagger.id">
          <div class="card-header">
              <label for="fecha" class="font-weight-bold">Fecha: <span class="text-info">{{wagger.game_date.date}}</span></label>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <p class="m-0 font-weight-bold">Local:</p>
                <p class="m-0 font-weight-bold">Visitante:</p>
                <p class="m-0 font-weight-bold">Modo de Juego:</p>
                <p class="m-0 font-weight-bold">Mapa:</p>
                <p class="m-0 font-weight-bold">Premio:</p>
                <p class="m-0 font-weight-bold">Resultado:</p>
              </div>
              <div class="col">
                <p class="m-0">{{wagger.game_date.local_user.nickname}}</p>
                <p class="m-0">{{wagger.game_date.visitor_user.nickname}}</p>
                <p class="m-0">{{wagger.game_date.game_mode}}</p>
                <p class="m-0">{{wagger.game_date.map_mode}}</p>
                <p class="m-0">{{wagger.game_date.prize}}</p>
                <p class="m-0 text-success font-weight-bold" v-if="wagger.winner_user_id == user_id">Ganador</p>
                <p class="m-0 text-danger font-weight-bold" v-else>Perdedor</p>
              </div>
            </div>
          </div>
      </div>
      </div>
    </div>

      <infinite-loading @infinite="infiniteHandler" spinner="bubbles">
          <div slot="no-more">No Hay Más Datos</div>
          <div slot="no-results">No Existen Datos</div>
      </infinite-loading>

  </div>
</template>

<script>
import moment from 'moment';

export default {
    data() {
      return {
        page: 0,
        waggers:[]
      }
    },
    // props: {
    //   user_id: {
    //     type: String,
    //     default: ''
    //   },
    // },
    props:['user_id'],
    methods: {
    infiniteHandler($state) {
            this.page++;
            var that = this;
            $.get({
                url: '/list_waggers/'+that.user_id+'?page=' + that.page,
                success: function (response) {
                //  console.log(response.data)
                    if (response.data.length) {
                        that.waggers = that.waggers.concat(response.data)
                        $state.loaded()
                                     
                    } else {
                        $state.complete()
                    }
                },
                error: function (error) {
                    console.log(error)
                }
            }); 
          this.waggers.forEach(function (wagger) {
            wagger.game_date.date = moment(wagger.game_date.date).format('lll')
            });

            
        }
    },
}
</script>

<style>

</style>

