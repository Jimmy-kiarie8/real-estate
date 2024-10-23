import{_ as x}from"./_plugin-vue_export-helper-c27b6911.js";import{i as e,o as C,c as U,w as a,b as t,f as s,t as w}from"./app-54441529.js";const V={props:{form_data:Object},components:{},data(){return{dialog:!1,form:{},snackbar:!1,text:"Updated"}},mounted(){},methods:{onFileChange(n){this.snackbar=!0,this.text="Uploading...";const o=n.target.files[0];this.uploadFile(o)},async uploadFile(n){try{const o=new FormData;o.append("file",n);const i=await axios.post("/upload",o);this.snackbar=!0,this.text="Uploaded...",this.dialog=!1,console.log("Upload successful",i.data)}catch(o){console.error("Error uploading file",o)}},submit(){console.log(this.form_data),this.$inertia.post("/upload",this.form_data,{onError:()=>{},onSuccess:()=>{console.log("success")}})},close(){this.dialog=!1},show(n){this.form=n,this.dialog=!0}}};function y(n,o,i,F,l,r){const _=e("v-divider"),p=e("v-card-title"),u=e("v-file-input"),m=e("v-card-text"),d=e("v-btn"),f=e("v-spacer"),v=e("v-card-actions"),g=e("v-card"),h=e("v-dialog"),b=e("v-snackbar"),k=e("v-row");return C(),U(k,{justify:"center"},{default:a(()=>[t(h,{persistent:"",modelValue:l.dialog,"onUpdate:modelValue":o[0]||(o[0]=c=>l.dialog=c),width:"800"},{default:a(()=>[t(_),t(g,null,{default:a(()=>[t(p,{class:"text-h5"},{default:a(()=>[s(" Upload Leads ")]),_:1}),t(m,null,{default:a(()=>[t(u,{clearable:"",label:"File input",variant:"outlined",onChange:r.onFileChange},null,8,["onChange"])]),_:1}),t(v,null,{default:a(()=>[t(d,{variant:"outlined",color:"error",onClick:r.close},{default:a(()=>[s(" Close ")]),_:1},8,["onClick"]),t(f),t(d,{variant:"outlined",color:"primary",onClick:r.submit},{default:a(()=>[s(" Upload ")]),_:1},8,["onClick"])]),_:1})]),_:1})]),_:1},8,["modelValue"]),t(b,{modelValue:l.snackbar,"onUpdate:modelValue":o[1]||(o[1]=c=>l.snackbar=c)},{default:a(()=>[s(w(l.text),1)]),_:1},8,["modelValue"])]),_:1})}const B=x(V,[["render",y]]);export{B as default};