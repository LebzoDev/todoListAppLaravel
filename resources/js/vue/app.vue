<template>
   
    <div class="todoListContainer">
  
        <div class="heading">
          <section class="sectionHeader">
          <h2 id="title">TodoList App</h2>
          <img src ="/img/logo.png" style="width:180px;" />
        </section>
          <hr>
          <!-- <h4>Ajouter une nouvelle tache</h4> -->
          <add-item-form v-on:reloadlist="getList()" />
           <hr>
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
  .sectionHeader{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  h4{
    margin-left: 15px;
  }
  .todoListContainer{
    width:50%;
    margin: auto;
    color:#4A5566;
  }

  .heading{
    border-radius: 5px;
    background: #E3C8BD;
    padding: 10px;
  }

  #title{
    text-align: center;
  }
</style>
