<template>
    <div class="addItem">
        <input type="text" class="entree" placeholder="Add a new Todo ..." v-model="item.name"/>
        <span v-if="item.completed_at">{{'Done: '+item.completed_at}}</span>
          <button @click="addItem()" type="button" class="btn btn-success" :disabled="item.name ? false :true">Ajouter</button>
    </div>
</template>

<script>

export default{

    data: function(){
        return {
            item: {
                name: ""
            }
        }
    },
    methods : {
        addItem(){
            if(this.item.name == ''){
                return;
            }
            axios.post('api/item/store',{
                item: this.item
            })
            .then(response=>{
                if (response.status==201){
                    this.item.name = "";
                    this.$emit('reloadlist');
                }
            })
            .catch(error=>{
                console.log(error);
            })
        }
    }
  
}
</script>

<style scoped>
    .addItem{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    input{
        background: #f7f7f7;
        border: 0;
        outline: none;
        padding: 5px;
        margin-right:10px;
        width: 100%;
    }

    .plus{
        font-size: 27px;
        cursor: pointer;
    }
    .active{
        color: #00CE25;
    }

    .inactive{
        color:#999999
    }
    .entree{
         border-radius: 5px;
    }
    .entree:focus{
        border:2px solid red;
    }
</style>
