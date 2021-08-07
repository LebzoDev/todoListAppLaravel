<template style="background:green">
   
    <div class="todoListContainer">
        <div class="heading">
          <h2 id="title">Todo List</h2>
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
  .todoListContainer{
    width:600px;
    margin: auto;
  }

  .heading{
    background: #e6e6e6;
    padding: 10px;
  }

  #title{
    text-align: center;
  }
</style>
