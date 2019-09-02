
    
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
      <div class="floating-div" @click="onInput">
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
                  <span class="insert">Smiley</span>
                  <span class="ferme d-none">Fermer</span>
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
      var icon;

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
        var this_icon = e.target;
        
        if(this_icon == undefined){
             icon = e.native;
        }
        else if(this_icon != undefined){
            var this_form = this_icon.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
            var this_textarea = this_form.querySelector('#comment');
            var value = this_textarea.value;
            
            if(!e){
            return false;
            }
            this.message = this.message + icon;
            this_textarea.value = value + icon;
        }
      },
      toggleEmo(e){
            var this_btn = e.target;
            var this_parent = this_btn.parentNode;
            var ouvrir = this_parent.querySelector('.insert');
            var fermer = this_parent.querySelector('.ferme');
            if(!this.emoStatus){
              ouvrir.classList.add('d-none');
              fermer.classList.remove('d-none');
            }else{
              fermer.classList.add('d-none');
              ouvrir.classList.remove('d-none');
            }
            this.emoStatus= !this.emoStatus;
      }
    },
    mounted(){
    },
    created(){
      this.fetchMessages();
     // Echo.private('lchat')
    //  .listen('MessageSent',(e)=>{
       //   this.allMessages.push(e.message)
     //     setTimeout(this.scrollToEnd,100);
     // });
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
    bottom: -410px;
}
.chat-card img {
    max-width: 300px;
    max-height: 200px;
}
</style>

