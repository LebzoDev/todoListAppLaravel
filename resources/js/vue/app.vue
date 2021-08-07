<template>
   
    <div class="todoListContainer">
        <div class="heading">
          <h2 id="title">Liste de taches à faire</h2>
          <h4>Ajouter une nouvelle tache</h4>
          <add-item-form v-on:reloadlist="getList()" />
        </div>
        <list-view 
            :items="items"
            v-on:reloadlist="getList()" />
    </div>
</template>

<script>

import addItemForm from './addItemForm.vue'
import listView from './listView.vue'
export default {
    components : {
      addItemForm,
      listView
    },
    data:function () {
      return {
        items:[]
      }
    },
    methods:{
      getList(){
        axios.get('/api/items')
          .then(response =>{
            this.items = response.data
          })
          .catch(error=> {
            console.log(error);
          })
      }
    },
    created(){
      this.getList();
    }
}
</script>

<style scoped>
  h4{
    margin-left: 15px;
  }
  .todoListContainer{
    width:50%;
    margin: auto;
    color:#4A5566;
  }

  .heading{
    background: #e6e6e6;
    padding: 10px;
  }

  #title{
    text-align: center;
  }
</style>
