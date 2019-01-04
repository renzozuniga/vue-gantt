<style>
    .tooltip {
      display: block !important;
      z-index: 10000;

      .tooltip-inner {
        background: black;
        color: white;
        border-radius: 16px;
        padding: 5px 10px 4px;
      }

      .tooltip-arrow {
        width: 0;
        height: 0;
        border-style: solid;
        position: absolute;
        margin: 5px;
        border-color: black;
        z-index: 1;
      }

      &[x-placement^="top"] {
        margin-bottom: 5px;

        .tooltip-arrow {
          border-width: 5px 5px 0 5px;
          border-left-color: transparent !important;
          border-right-color: transparent !important;
          border-bottom-color: transparent !important;
          bottom: -5px;
          left: calc(50% - 5px);
          margin-top: 0;
          margin-bottom: 0;
        }
      }

      &[x-placement^="bottom"] {
        margin-top: 5px;

        .tooltip-arrow {
          border-width: 0 5px 5px 5px;
          border-left-color: transparent !important;
          border-right-color: transparent !important;
          border-top-color: transparent !important;
          top: -5px;
          left: calc(50% - 5px);
          margin-top: 0;
          margin-bottom: 0;
        }
      }

      &[x-placement^="right"] {
        margin-left: 5px;

        .tooltip-arrow {
          border-width: 5px 5px 5px 0;
          border-left-color: transparent !important;
          border-top-color: transparent !important;
          border-bottom-color: transparent !important;
          left: -5px;
          top: calc(50% - 5px);
          margin-left: 0;
          margin-right: 0;
        }
      }

      &[x-placement^="left"] {
        margin-right: 5px;

        .tooltip-arrow {
          border-width: 5px 0 5px 5px;
          border-top-color: transparent !important;
          border-right-color: transparent !important;
          border-bottom-color: transparent !important;
          right: -5px;
          top: calc(50% - 5px);
          margin-left: 0;
          margin-right: 0;
        }
      }

      &[aria-hidden='true'] {
        visibility: hidden;
        opacity: 0;
        transition: opacity .15s, visibility .15s;
      }

      &[aria-hidden='false'] {
        visibility: visible;
        opacity: 1;
        transition: opacity .15s;
      }
    }
</style>
<template>
    <div class="row">
        <div class="col-1">
        </div>
        <div class="col-10">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Total de Clases: {{ classes.length }}</th>
                  <th v-for="_class in classes" scope="col">{{ _class }}</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(objective, index) in objectives" >
                  <th scope="row" v-bind:id="objective" v-b-tooltip.hover title="Tooltip content">{{ objective }}</th>
                  <td v-for="relation in relations[index]">{{ relation }}</td>
                </tr>  
              </tbody>
            </table>
        </div>
    </div>   
</template>

<script>
    export default {
        data () {
            return {
                classes: [],
                objectives: ['Objetivo1', 'Objetivo2', 'Objetivo3', 'Objetivo4', 'Objetivo5'],
                relations: [
                    ['Relation00', 'Relation01', ''],
                    ['', 'Relation11', 'Relation12'],
                    ['', '', 'Relation22']
                ],
                msg: 'Holaaa'       
            }
        },
        mounted(){
            axios
                .get('api/courses')
                .then(response => {
                    this.classes = response.data
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
</script>