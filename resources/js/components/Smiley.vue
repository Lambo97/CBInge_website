<template>
  
      <v-layout row >
      <div class="floating-div">
        <picker v-if="emoStatus" set="emojione" @select="onInput" title="Pick your emoji…" />

      </div>

     
      
        <v-flex class="ml-2 text-right" xs1>
              <v-btn @click="toggleEmo" fab dark small color="pink">
                  <v-icon>insert_emoticon </v-icon>
              </v-btn>
          </v-flex>
      </v-layout>
         

        

      
</template>

<script>
 
 import { Picker } from 'emoji-mart-vue'

  export default {
    props:['user'],
    components:{
      Picker,
     
    },
    
    data () {
      return {
        message:null,
        emoStatus:false,
        myText:null,
        allMessages:[],
        token:document.head.querySelector('meta[name="csrf-token"]').content
      }
    },
    methods:{
      sendMessage(){
        //check if there message
        if(!this.message){
          return alert('Please enter message');
        }
          axios.post('/messages', {message: this.message}).then(response => {
                    this.message=null;
                    this.emoStatus=false;
                    this.allMessages.push(response.data.message)
                    setTimeout(this.scrollToEnd,100);
          });
      },
      fetchMessages() {
            axios.get('/messages').then(response => {
                this.allMessages = response.data;
            });
        },
      scrollToEnd(){
        window.scrollTo(0,99999);
      },
      onInput(e){
        if(!e){
          return false;
        }
        if(!this.message){
          this.message=e.native;
        }else{
          this.message=this.message + e.native;
        }
      },
     toggleEmo(){
           this.emoStatus= !this.emoStatus;
     }
    },
    mounted(){
    },
    created(){
      this.fetchMessages();
      Echo.private('lchat')
      .listen('MessageSent',(e)=>{
          this.allMessages.push(e.message)
          setTimeout(this.scrollToEnd,100);
      });
    }
    
  }
</script>

<style scoped>
.chat-card{
  margin-bottom:140px;
}
.floating-div{
    position: fixed;
}
.chat-card img {
    max-width: 300px;
    max-height: 200px;
}
</style>