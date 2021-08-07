<template>
    <div class="item">
        <section>
            <input type="checkbox"
                @change="updateCheck()"
                v-model="item.completed"/>
            <span :class="[item.completed ? 'completed':'','itemText']">{{item.name}}</span>
        </section>
        <span v-if="item.completed_at">{{'Terminée:'+item.completed_at}}</span>
         <span v-if="!item.completed_at">{{'Non Terminée'}}</span>
      
      <button type="button" @click="removeItem()" class="btn btn-danger">Supprimer</button>
    <!-- <button @click="removeItem()" class="trashcan">
            <font-awesome-icon class="trash" icon="trash"/>
        </button> -->
    </div>
</template>

<script>
export default {
    props:['item'],
    methods: {
        updateCheck(){
          
            axios.put('api/item/'+this.item.id, {
                    item: this.item
            })
            .then(response =>{
                if (response.status==200) {
                    this.$emit('itemchanged');
                }
            })
            .catch(error=>{
                console.log(error);
            })
      
        },
        removeItem(){
            if(confirm("Confirmez")){
            axios.delete('api/item/'+ this.item.id)
                .then(response=>{
                    if (response.status==200) {
                        this.$emit('itemchanged');
                    }
                })
                .catch(error=>{
                    console.log(error);
                })
        }
          }
    }
}
</script>

<style scoped>
    .completed{
        text-decoration: line-through;
        color: #999999;
    }
    .itemText{
       
        margin-left: 20px;
    }
    .item{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .trashcan{
        background: #e6e6e6;
        border: none;
        color: red;
        outline:none;
        cursor: pointer;
    }
    .trash{
         font-size: 22px;
    }
    input[type=checkbox]{
        margin-left: 5px;
    }
</style>