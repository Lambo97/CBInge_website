
    
<template>
  <div>
 <!--  <v-flex xs12 sm6 offset-sm3>
      <v-card class="chat-card" >

        <v-list>
          <v-subheader
            >
              Group Chat
            </v-subheader>
            <v-divider></v-divider>

            <message-list :user="user" :all-messages="allMessages"></message-list>
        </v-list>
      </v-card>

    </v-flex>
 --> 
      <div class="floating-div">
          <picker v-if="emoStatus" set="emojione" @select="onInput" title="Pick your emoji…" />

      </div>

   <!---   <v-footer
      height="auto"
      fixed
      color="grey"
      >
   -->
      <span>
          <span class=" text-right buttons-green" xs1>
              <span @click="toggleEmo" fab dark small color="pink">
                  <span id="insertion" class="">Inserér une émoticone </span>
                  <span id="fermeture" class="d-none">Fermer</span>
              </span>
            </span>

        <!--  <v-flex xs1 class="text-center">
             <file-upload
             post-action="/messages"
             ref='upload'
             @input-file="$refs.upload.active = true"
             :headers="{'X-CSRF-TOKEN': token}"
             >
                 <v-icon class="mt-3">attach_file</v-icon>
             </file-upload>

        </v-flex>
      
        <v-flex>
          
            <v-text-field
            
              rows=2
              v-model="message"
              label="Enter Message"
              single-line
              @keyup.enter="sendMessage"
            ></v-text-field>
        </v-flex>
      
        <v-flex xs4>
            <v-btn
              @click="sendMessage"
             dark class="mt-3 ml-2 white--text" small color="green">send</v-btn>


        </v-flex>
            -->
        </span>


        
      </div>
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
        var textarea = document.getElementById('message');
        var value = textarea.value;
        
        if(!e){
          return false;
        }
          this.message=this.message + e.native;
          textarea.value=value+e.native;
        
      },
      toggleEmo(){
            var ouvrir= document.getElementById('insertion');
            var fermer= document.getElementById('fermeture');
            if(!this.emoStatus){
              ouvrir.classList.add('d-none');
              fermer.classList.remove('d-none');
            }else{
              fermer.classList.add('d-none');
              ouvrir.classList.remove('d-none');
            }
            console.log(this.emoStatus);
            this.emoStatus= !this.emoStatus;
      }
    },
    mounted(){
    },
    created(){
      this.fetchMessages();
     // Echo.private('lchat')
    //  .listen('MessageSent',(e)=>{
    //      this.allMessages.push(e.message)
    //      setTimeout(this.scrollToEnd,100);
   //   });
    }
    
  }
</script>

<style scoped>
.chat-card{
  margin-bottom:140px;
}

.floating-div{
    z-index: 2000;
    position: absolute;
    bottom: -440px;
}
.chat-card img {
    max-width: 300px;
    max-height: 200px;
}
</style>

